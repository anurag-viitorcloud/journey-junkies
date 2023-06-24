<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ImageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(protected openAIController $openAIController)
    {
        ini_set('memory_limit', '-1');
    }

    /**
     * Gather data from images.
     *
     */
    public function getImageData(Request $request)
    {
        dd($request);
        try {
            $image = $request->file('image');

            // Save the image
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('blogImage'), $filename);

            // Get the date and location information
            $imagePath = public_path('blogImage') . '/' . $filename;
            $exifData = exif_read_data($imagePath);
            $dateTaken = $exifData['DateTimeOriginal'] ?? null;
            $location = $exifData['GPSLatitude'] ?? null;

            // Process and store the date and location information as needed
            $imageData = [
                'date_taken' => $dateTaken,
                'location' => $location,
            ];

            $this->openAIController->createContent($imageData);

        } catch (Exception $ex) {
            Log::error($ex);
            $response['message'] = trans('auth.something_went_wrong');
        }
        return $response;
    }
}