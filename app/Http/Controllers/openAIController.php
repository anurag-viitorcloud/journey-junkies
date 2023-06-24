<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Blog;
use App\Constant\Constant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class openAIController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(protected ImageController $imageController)
    {
    }

    /**
     * Create content.
     *
     */
    public function createContent(Request $request)
    {
        try { 
            $blog = Blog::where('id', $request['blogId'])->first() ?? [];
            
            return view('blog.create', compact('blog'));

        } catch (Exception $ex) {
            Log::error($ex);
        }
    }
}
