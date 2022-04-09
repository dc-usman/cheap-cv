<?php

use Illuminate\Database\Seeder;
use App\SelectServices;

class SelectServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SelectServices::insert([
            [
                'name' => 'Cv Writing',
            ],
            [
                'name' => 'Cover Letter Writing',
            ],
            [
                'name' => 'LinkedIn Profile',
            ],
            [
                'name' => 'Website Profile',
            ],
            [
                'name' => 'Cv Writing + Cover Letter Writing',
            ],
            [
                'name' => 'Cv Writing + LinkedIn Profile Writing',
            ],
            [
                'name' => 'Cv Writing + Website Profile',
            ],
            [
                'name' => 'Cv Writing + Cover Letter + LinkedIn Profile'
            ],
            [
                'name' => 'Cv Writing + Cover Letter + LinkedIn Profile + Website Profile'
            ],
            [
                'name' => 'Job Application Writing'
            ],
            [
                'name' => "Personal Statement Writing"
            ],
        ]);
         
    }
}
