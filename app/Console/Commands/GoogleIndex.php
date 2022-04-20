<?php

namespace App\Console\Commands;

use Famdirksen\LaravelGoogleIndexing\LaravelGoogleIndexing;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class GoogleIndex extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'google:index';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'SEO Google Index';

    protected $urls = [
        // "https://assignmenthelpuae.com/reviews",
        // "https://assignmenthelpuae.com/assignment-help-oman",
        // "https://assignmenthelpuae.com/cipd-assignment",
        // "https://assignmenthelpuae.com/content-writing",
        // "https://assignmenthelpuae.com/dissertation-writing",
        // "https://assignmenthelpuae.com/essay-writing",
        // "https://assignmenthelpuae.com/perfect-resume",
        // "https://assignmenthelpuae.com/mba-writing",
        // "https://assignmenthelpuae.com/thesis-writing",
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

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        foreach( $this->urls as $url ){
            LaravelGoogleIndexing::create()->update( $url );
        }

        Log::info("Cron is working fine!");

        // return 'index updated success';
    }
}
