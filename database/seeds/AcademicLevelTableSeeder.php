<?php

use App\AcademicLevel;
use Illuminate\Database\Seeder;

class AcademicLevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AcademicLevel::insert([
            [
                'name' => 'Undergraduate / Diploma',
            ],
            [
                'name' => 'Master',
            ],
            [
                'name' => 'Mphill and Ph.D.',
            ],
        ]);
    }
}
