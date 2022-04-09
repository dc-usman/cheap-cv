<?php

use App\ResumeWriting;
use Illuminate\Database\Seeder;

class ResumeWritingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ResumeWriting::insert([
            [
                'resume'=> 'Resume',
            ],
            [
                'resume'=> 'Writing',
            ],
            [
                'resume'=>'Essay',
            ],
        ]);
    }
}
