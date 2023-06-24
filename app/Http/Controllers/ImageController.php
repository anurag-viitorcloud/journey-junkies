<?php

namespace App\Http\Controllers;

use Exception;
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
            $dateTaken = $exifData['DateTimeOriginal'] ?? null;
            $location = $exifData['GPSLatitude'] ?? null;

            // Process and store the date and location information as needed

            return response()->json([
                'date_taken' => $dateTaken,
                'location' => $location,
            ]);
        } catch (Exception $ex) {
            Log::error($ex);
            $response['message'] = trans('auth.something_went_wrong');
        }
        Log::info($response);
        return $response;
    }
}