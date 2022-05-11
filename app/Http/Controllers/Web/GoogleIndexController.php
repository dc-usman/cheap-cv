<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Famdirksen\LaravelGoogleIndexing\LaravelGoogleIndexing;
use Illuminate\Http\Request;

class GoogleIndexController extends Controller
{
    public function index()
    {
        $urls = [
            "https://cheapcvwriting.co.uk/",
            "https://cheapcvwriting.co.uk/about",
            "https://cheapcvwriting.co.uk/services",
            "https://cheapcvwriting.co.uk/cover-letter-writing",
            "https://cheapcvwriting.co.uk/cv-editing",
            "https://cheapcvwriting.co.uk/linkedin-profile-writing",
            "https://cheapcvwriting.co.uk/samples",
            "https://cheapcvwriting.co.uk/reviews",
            "https://cheapcvwriting.co.uk/contact-us",
            "https://cheapcvwriting.co.uk/order",    
        ];

        foreach( $urls as $url ){
            LaravelGoogleIndexing::create()->update( $url );
        }

        dd("google index has been run");
    }
}
