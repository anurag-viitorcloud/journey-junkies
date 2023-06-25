<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Blog;
use App\Constant\Constant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ImageController extends Controller
{
    /**
     * Gather data from images.
     *
     */
    public function getImageData(Request $request)
    {
        try {
            $image = $request->file('image');

            // Save the image
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('blogImage'), $filename);

            // Get the date and location information
            $imagePath = public_path('blogImage') . '/' . $filename;
            $exifData = exif_read_data($imagePath);
            $dateTaken = $exifData['DateTimeOriginal'] ?? "10/6/2023";
            $location = $exifData['GPSLatitude'] ?? $request['location'];

            // Process and store the date and location information as needed
            $imageData = response()->json([
                'date_taken' => $dateTaken,
                'location' => $location,
            ]);

            if ($imageData->original['date_taken'] != "null" || $imageData->original['location'] != "null") {
                $ch = curl_init();
                $url = config('config-variables.openai_api_url').'completions';
                $api_key = env('OPENAI_API_KEY');

                $post_fields = '{
                    "model": "'.Constant::AI_MODEL.'",
                    "prompt": "Act like a content writer and write a blog for me in HTML body & in '.$request['language'].'. I travelled on '.$imageData->original['date_taken'].' to '.$imageData->original['location'].'. Also, This blog must be creative, SEO friendly & '.$request['desc'].' and must not have reapeted texts. Finish in 600 words",
                    "max_tokens": '.Constant::AI_MAX_TOKENS.',
                    "temperature": '.Constant::AI_TEMPERATURE.'
                }';

                $header  = [
                    'Content-Type: application/json',
                    'Authorization: Bearer ' . $api_key
                ];

                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

                $result = curl_exec($ch);
                
                if (curl_errno($ch)) {
                    echo 'Error: ' . curl_error($ch);
                }
                curl_close($ch);

                $responseData = json_decode($result);
                // var_dump($responseData->choices[Constant::STATUS_ZERO]->text);
            
                if ($responseData) {
                    $blog = Blog::create([
                        'title' => $filename,
                        'description' => Constant::NULL,
                        'post' => $responseData->choices[Constant::STATUS_ZERO]->text,
                        'prompt' =>  "Act like a content writer and give me a travel blog for me in HTML body. I travelled on ".$imageData->original['date_taken']." to ".$imageData->original['location'].". Also, This blog must be creative, SEO friendly & ".$request['desc']." and must not have repeated texts",
                        'date' => $request['date_taken'] ?? Constant::NULL,
                        'location' => $request['location'] ?? Constant::NULL,
                    ]);
                    $response['data'] = $responseData;
                    $blogId = $blog->id;
                } else {
                    $response['data'] = Constant::EMPTY_ARRAY;
                }
                return redirect()->route('create-blog', ['blogId' => $blogId]);
            }
            
        } catch (Exception $ex) {
            Log::error($ex);
            return false;
        }
    }

    /**
     * Create content.
     *
     */
    public function createContent(Request $request)
    {
        try { 
            $image = $request->file('image');

            // Save the image
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('socialImage'), $filename);

            // Get the date and location information
            $imagePath = public_path('socialImage') . '/' . $filename;

            $ch = curl_init();
            $url = config('config-variables.openai_api_url').'completions';

            $api_key = env('OPENAI_API_KEY');

            $post_fields = '{
                "model": "'.Constant::AI_MODEL.'",
                "prompt": "Give me an instagram caption which can be creative & related to '.$request['desc'].' with related hashtags and must complete it in 30 words.",
                "max_tokens": '.Constant::CAP_AI_MAX_TOKENS.',
                "temperature": '.Constant::AI_TEMPERATURE.'
            }';
            
            $header  = [
                'Content-Type: application/json',
                'Authorization: Bearer ' . $api_key
            ];

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

            $result = curl_exec($ch);
            
            if (curl_errno($ch)) {
                echo 'Error: ' . curl_error($ch);
            }
            curl_close($ch);

            $responseData = json_decode($result);
            // var_dump($responseData->choices[Constant::STATUS_ZERO]->text);
        
            if ($responseData) {
                $response['data'] = $responseData;
                return view('socialMedia.create', compact('filename', 'responseData'));
            } else {
                $response['data'] = Constant::EMPTY_ARRAY;
            }
            
        } catch (Exception $ex) {
            Log::error($ex);
            $response['message'] = trans('auth.something_went_wrong');
        }
    }
}