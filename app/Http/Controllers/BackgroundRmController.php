<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BackgroundRmController extends Controller
{
    public function showForm()
    {
        return view('upload-form-rmbg');
    }

    public function processRmbg(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,webp,jpeg|max:30000', 
        ]);

        $image = $request->file('image');

        $apiLink = 'https://clipdrop-api.co/remove-background/v1';
        $apiKey = 'c26412cee07cc517244e78c28131d75a955abb0c463c5bb79ea1dbc7eeaea2d1bdf552c483e05f76689daf7617fdfc81'; 

        $response = Http::withHeaders([
            'x-api-key' => $apiKey,
        ])->attach('image_file', file_get_contents($image->path()), $image->getClientOriginalName());

      
      
 $response = $response->post($apiLink);

 if ($response->successful()) {
     $remainingCredits = $response->header('x-remaining-credits');
     $creditsConsumed = $response->header('x-credits-consumed');
     $contentType = $response->header('content-type');

     return view('edited-image-cleanup')->with([
         'editedImageData' => $response->body(),
         'remainingCredits' => $remainingCredits,
         'creditsConsumed' => $creditsConsumed,
         'contentType' => $contentType,
     ]);
 } else {
     $errorDetails = $response->json();

     return response()->json($errorDetails, $response->status());
 }
}}
