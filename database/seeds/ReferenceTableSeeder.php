<?php

use App\ReferenceStyle;
use Illuminate\Database\Seeder;

class ReferenceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ReferenceStyle::insert([
            [
                "name" => "APA",
            ],
            [
                "name" => "MLA",
            ],
            [
                "name" => "Chicago",
            ],
            [
                "name" => "Turabian",
            ],
            [
                "name" => "Harvard",
            ],
            [
                "name" => "Oxford",
            ],
            [
                "name" => "Vancouver",
            ],
            [
                "name" => "CBE",
            ],
            [
                "name" => "Other",
            ],
        ]);
    }
}
