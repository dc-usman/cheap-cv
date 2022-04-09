<?php

use App\Deadline;
use Illuminate\Database\Seeder;

class DeadlineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Deadline::insert([
            [
                'name' => '15 Days',
                'duration_in_days' => '15',
            ],
            [
                'name' => '10 Days',
                'duration_in_days' => '10',
            ],
            [
                'name' => '7 Days',
                'duration_in_days' => '7',
            ],
            [
                'name' => '6 Days',
                'duration_in_days' => '6',
            ],
            [
                'name' => '5 Days',
                'duration_in_days' => '5',
            ],
            [
                'name' => '4 Days',
                'duration_in_days' => '4',
            ],
            [
                'name' => '3 Days',
                'duration_in_days' => '3',
            ],
            [
                'name' => '48 Hours',
                'duration_in_days' => '2',
            ],
            [
                'name' => '24 Hours',
                'duration_in_days' => '1',
            ],
            [
                'name' => '12 Hours',
                'duration_in_days' => '0.5',
            ],
            [
                'name' => '6 Hours',
                'duration_in_days' => '0.25',
            ]
        ]);
    }
}
