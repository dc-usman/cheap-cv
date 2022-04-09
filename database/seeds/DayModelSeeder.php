<?php

use Illuminate\Database\Seeder;
use App\DayModel;

class DayModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DayModel::insert([
            [
                'name'=> '7 Days',
            ],
            [
                'name'=> '4 Days',
            ],
            [
                'name'=> '2 Days',
            ],
            [
                'name'=> '1 Day', 
            ],
        ]);
    }
}
