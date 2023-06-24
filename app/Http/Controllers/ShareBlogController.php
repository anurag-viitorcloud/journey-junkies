<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;
use Abraham\TwitterOAuth\TwitterOAuth;
use Laravel\Socialite\Facades\Socialite;
use Twitter;


class ShareBlogController extends Controller
{

    public function sendToZapier()
    {
        // $consumerKey = 'sPP3k1XSX8mYj5pN3hDrsAzh5';
        // $consumerSecret = 'mk0BnCBne8bkf6Jogaxh5A6aCpGsrDWc6ubgVbkr4Nig4ZjusC';
        // $accessToken = '1672629635090198528-swMxYpR7V5LsBas53LjfLudqX4LlsN';
        // $accessTokenSecret = 'OiNi2Yj01GDscplRbIUCYONSegHBO0tcQqVp5QhvbRkb2';

        // $connection = new TwitterOAuth($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);
        // $tweet = "test data";

        // $status = $connection->post("statuses/update", ["status" => $tweet]);

        // if ($connection->getLastHttpCode() === 200) {
        //         return response()->json(['message' => 'Tweet created successfully'], 200);
        //     }else {
                  
        //             return response()->json(['message' => 'Failed to create tweet'], 500);
        //         }

       
    }

    public function redirect()
    {
        return Socialite::driver('twitter')->redirect();
    }

    public function callback(Request $request)
    {
            $user = Socialite::driver('twitter')->user();
            $token = $user->token;
            $tokenSecret = $user->tokenSecret;

            Twitter::reconfig([
                'token' => $token,
                'secret' => $tokenSecret
            ]);

            Twitter::postTweet(['status' => 'Hello from Laravel!']);
    }

}
