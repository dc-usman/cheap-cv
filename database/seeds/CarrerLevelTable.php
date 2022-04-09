<?php

use Illuminate\Database\Seeder;
use App\CarrerLevelModel;
class CarrerLevelTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CarrerLevelModel::insert([
            [
                'name' => 'Entery Level - 0 to 2 Years',
            ],
            [
                'name' => 'Executive - 3 to 7 Years',
            ],
            [
                'name' => 'Senior - 8 + Years',
            ],
        ]);
    }
}
