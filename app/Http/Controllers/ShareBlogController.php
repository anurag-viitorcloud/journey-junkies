<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;
use Laravel\Socialite\Facades\Socialite;
use Twitter;
use Abraham\TwitterOAuth\TwitterOAuth;

class ShareBlogController extends Controller
{

    public function sendToZapier()
    {
        $consumerKey = 'sPP3k1XSX8mYj5pN3hDrsAzh5';
        $consumerSecret = 'mk0BnCBne8bkf6Jogaxh5A6aCpGsrDWc6ubgVbkr4Nig4ZjusC';
        $accessToken = '1672629635090198528-swMxYpR7V5LsBas53LjfLudqX4LlsN';
        $accessTokenSecret = 'OiNi2Yj01GDscplRbIUCYONSegHBO0tcQqVp5QhvbRkb2';

        try {
            $connection = new TwitterOAuth($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);

            $parameters = [
                'status' => 'Meow Meow Meow',
            ];
            $result = $connection->post('statuses/update', $parameters);

            if ($connection->getLastHttpCode() === 200) {
                return response()->json(['message' => 'Tweet created successfully'], 200);
            }
        } catch (\Exception $e) {
            Log::error($e);
            return response()->json(['error' => $e->getMessage()], 500);
        }

        // $tweet = "Hello test twitter";

        // try {
        //     Twitter::postTweet(['status' => $tweet]);
        //     return response()->json(['message' => 'Tweet uploaded successfully']);
        // } catch (\Exception $e) {
        //     return response()->json(['error' => $e->getMessage()], 500);
        // }


    }

    // public function redirect()
    // {
    //     return Socialite::driver('twitter')->redirect();
    // }

    // public function callback(Request $request)
    // {
    //         $user = Socialite::driver('twitter')->user();
    //         $token = $user->token;
    //         $tokenSecret = $user->tokenSecret;

    //         Twitter::reconfig([
    //             'token' => $token,
    //             'secret' => $tokenSecret
    //         ]);

    //         Twitter::postTweet(['status' => 'Hello from Laravel!']);
    // }
}
