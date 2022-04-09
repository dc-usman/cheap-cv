<?php

use Illuminate\Database\Seeder;
use App\Carrer_Level;
class CarrerLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Carrer_Level::insert([
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
