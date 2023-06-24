<?php

namespace App\Http\Controllers;

use Exception;
use App\Constant\Constant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class openAIController extends Controller
{
    /**
     * Create content.
     *
     */
    public function createContent(Request $request)
    {
        try { 
            $ch = curl_init();
            $url = config('config-variables.openai_api_url').'completions';

            $api_key = config('config-variables.openai_api_key');

            $post_fields = '{
                "model": "'.Constant::AI_MODEL.'",
                "prompt": "'.$request['query'].'",
                "max_tokens": "'.Constant::AI_MAX_TOKENS.'",
                "temperature": "'.Constant::AI_TEMPERATURE.'"
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
            var_dump($responseData->choices[Constant::STATUS_ZERO]->text);
                
            if ($responseData) {
                $response['data'] = $responseData;
            } else {
                $response['data'] = Constant::EMPTY_ARRAY;
            }

        } catch (Exception $ex) {
            Log::error($ex);
            $response['message'] = trans('auth.something_went_wrong');
        }

        return $response;
    }
}
