<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;

use DOMDocument;

class HtmlToXMLController extends Controller
{
    public function converToXML(Request $request)
    {
        $html = $request['htmldata'];
        // Create a new DOMDocument instance
        $dom = new DOMDocument();

        // Disable errors and warnings
        libxml_use_internal_errors(true);

        // Load the HTML content into the DOMDocument
        $dom->loadHTML($html);

        // Enable error handling
        libxml_clear_errors();
        libxml_use_internal_errors(false);

        // Set the formatOutput property to true for pretty-printed XML
        $dom->formatOutput = true;

        // Convert the DOMDocument to XML string
        $xml = $dom->saveXML();

        // Set the appropriate headers for XML response
        // $headers = [
        //     'Content-Type' => 'application/xml',
        // ];
        $headers = ['Content-Type' => 'application/xml', 'Content-Disposition' => 'attachment; filename="converted_file.xml"', ]; // Create a Laravel response with the XML content and headers
        $response = Response::make($xml, 200, $headers); // Return the response to initiate the file download
        // return $response;

        // $response = Response::create($xml, 200);
        $response->header('Cache-Control', 'public');
        $response->header('Content-Description', 'File Transfer');
        $response->header('Content-Disposition', 'attachment; filename=test.xml');
        $response->header('Content-Transfer-Encoding', 'binary');
        $response->header('Content-Type', 'text/xml');
        return $response;
        // Return the XML response
        // dd( Response::make($xml, 200, $headers));
        //echo $xml;
       // dd($xml);
    }
}
