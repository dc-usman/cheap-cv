<?php

use App\FareModel;
use Illuminate\Database\Seeder;

class FareTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FareModel::insert([
            [
               'carrer_level_id'  => 1, // undergraduate
               'select_service_id'   => 1, // 15
               'day_model_id'     => 1,
               'fare'              =>25,
            ],
            [
               'carrer_level_id'  => 2, // undergraduate
               'select_service_id' => 1, // 10
               'day_model_id'     => 1,
               'fare'=> 35,
            ],
            [
               'carrer_level_id'  => 3,
               'select_service_id'        => 1,
               'day_model_id'     => 1,
               'fare'=> 45,
            ],
            [
               'carrer_level_id'  => 1,
               'select_service_id'        => 2,
               'day_model_id'     => 1,
               'fare'=> 20,
            ],
            [
               'carrer_level_id'  => 2,
               'select_service_id'        => 2,
               'day_model_id'     => 1,
               'fare'=> 30,
            ],
            [
               'carrer_level_id'  => 3,
               'select_service_id'        => 2,
               'day_model_id'     => 1,
               'fare'=> 40,
            ],
            [
               'carrer_level_id'  => 1,
               'select_service_id'        => 3,
               'day_model_id'     => 1,
               'fare'=> 30,
            ],
            [
               'carrer_level_id'  => 2,
               'select_service_id'        => 3,
               'day_model_id'     => 1,
               'fare'=> 40,
            ],
            [
               'carrer_level_id'  => 3,
               'select_service_id'        => 3,
               'day_model_id'     => 1,
               'fare'=> 50,
            ],
            [
               'carrer_level_id'  => 1,
               'select_service_id'        => 4,
               'day_model_id'     => 1,
               'fare'=> 100,
            ],
            [
               'carrer_level_id'  => 2,
               'select_service_id'        => 4,
               'day_model_id'     => 1,
               'fare'=> 120,
            ],
            [
               'carrer_level_id'  => 3, // master
               'select_service_id'        => 4, // 15
               'day_model_id'     => 1,
               'fare'=> 140,
            ],
            [
               'carrer_level_id'  => 1,
               'select_service_id'        => 5,
               'day_model_id'     => 1,
               'fare'=> 40,
            ],
            [
               'carrer_level_id'  => 2,
               'select_service_id'        => 5,
               'day_model_id'     => 1,
               'fare'=> 60,
            ],
            [
               'carrer_level_id'  => 3,
               'select_service_id'        => 5,
               'day_model_id'     => 1,
               'fare'=> 80,
            ],
            [
               'carrer_level_id'  => 1,
               'select_service_id'        => 6,
               'day_model_id'     => 1,
               'fare'=> 50,
            ],
            [
               'carrer_level_id'  => 2,
               'select_service_id'        => 6,
               'day_model_id'     => 1,
               'fare'=> 70,
            ],
            [
               'carrer_level_id'  => 3,
               'select_service_id'        => 6,
               'day_model_id'     => 1,
               'fare'=> 90,
            ],
            [
               'carrer_level_id'  => 1,
               'select_service_id'        => 7,
               'day_model_id'     => 1,
               'fare'=> 120,
            ],
            [
               'carrer_level_id'  => 2,
               'select_service_id'        => 7,
               'day_model_id'     => 1,
               'fare'=> 150,
            ],
            [
               'carrer_level_id'  => 3,
               'select_service_id'        => 7,
               'day_model_id'     => 1,
               'fare'=> 180,
            ],
            [
               'carrer_level_id'  => 1,
               'select_service_id'        => 8,
               'day_model_id'     => 1,
               'fare'=> 70,
            ],
            [
               'carrer_level_id'  => 2, 
               'select_service_id'        => 8, 
               'day_model_id'     => 1,
               'fare'=> 100,
            ],
            [
               'carrer_level_id'  => 3,
               'select_service_id'        => 8,
               'day_model_id'     => 1,
               'fare'=> 130,
            ],
            [
               'carrer_level_id'  => 1,
               'select_service_id'        => 9,
               'day_model_id'     => 1,
               'fare'=> 165,
            ],
            [
               'carrer_level_id'  => 2,
               'select_service_id'        => 9,
               'day_model_id'     => 1,
               'fare'=> 215,
            ],
            [
               'carrer_level_id'  => 3,
               'select_service_id'        => 9,
               'day_model_id'     => 1,
               'fare'=> 265,
            ],
            [
               'carrer_level_id'  => 1,
               'select_service_id'        => 10,
               'day_model_id'     => 1,
               'fare'=> 50,
            ],
            [
               'carrer_level_id'  => 2,
               'select_service_id'        => 10,
               'day_model_id'     => 1,
               'fare'=> 60,
            ],
            [
               'carrer_level_id'  => 3,
               'select_service_id'        => 10,
               'day_model_id'     => 1,
               'fare'=> 70,
            ],
            [
               'carrer_level_id'  => 1,
               'select_service_id'        =>11,
               'day_model_id'     => 1,
               'fare'=> 50,
            ],
            [
               'carrer_level_id'  => 2,
               'select_service_id'        => 11,
               'day_model_id'     => 1,
               'fare'=> 60,
            ],
            [
               'carrer_level_id'  => 3,
               'select_service_id'        => 11,
               'day_model_id'     => 1,
               'fare'=> 70,
            ],
            //4days deadline
            [
               'carrer_level_id'  => 1, // undergraduate
               'select_service_id'   => 1, // 15
               'day_model_id'     => 2,
               'fare'              =>35,
            ],
            [
               'carrer_level_id'  => 2, // undergraduate
               'select_service_id' => 1, // 10
               'day_model_id'     => 2,
               'fare'=> 45,
            ],
            [
               'carrer_level_id'  => 3,
               'select_service_id'        => 1,
               'day_model_id'     => 2,
               'fare'=> 55,
            ],
            [
               'carrer_level_id'  => 1,
               'select_service_id'        => 2,
               'day_model_id'     => 2,
               'fare'=> 30,
            ],
            [
               'carrer_level_id'  => 2,
               'select_service_id'        => 2,
               'day_model_id'     => 2,
               'fare'=> 40,
            ],
            [
               'carrer_level_id'  => 3,
               'select_service_id'        => 2,
               'day_model_id'     => 2,
               'fare'=> 50,
            ],
            [
               'carrer_level_id'  => 1,
               'select_service_id'        => 3,
               'day_model_id'     => 2,
               'fare'=> 40,
            ],
            [
               'carrer_level_id'  => 2,
               'select_service_id'        => 3,
               'day_model_id'     => 2,
               'fare'=> 50,
            ],
            [
               'carrer_level_id'  => 3,
               'select_service_id'        => 3,
               'day_model_id'     => 2,
               'fare'=> 60,
            ],
            [
               'carrer_level_id'  => 1,
               'select_service_id'        => 4,
               'day_model_id'     => 2,
               'fare'=> 150,
            ],
            [
               'carrer_level_id'  => 2,
               'select_service_id'        => 4,
               'day_model_id'     => 2,
               'fare'=> 170,
            ],
            [
               'carrer_level_id'  => 3, // master
               'select_service_id'        => 4, // 15
               'day_model_id'     => 2,
               'fare'=> 190,
            ],
            [
               'carrer_level_id'  => 1,
               'select_service_id'        => 5,
               'day_model_id'     => 2,
               'fare'=> 60,
            ],
            [
               'carrer_level_id'  => 2,
               'select_service_id'        => 5,
               'day_model_id'     => 2,
               'fare'=> 80,
            ],
            [
               'carrer_level_id'  => 3,
               'select_service_id'        => 5,
               'day_model_id'     => 2,
               'fare'=> 100,
            ],
            [
               'carrer_level_id'  => 1,
               'select_service_id'        => 6,
               'day_model_id'     => 2,
               'fare'=> 70,
            ],
            [
               'carrer_level_id'  => 2,
               'select_service_id'        => 6,
               'day_model_id'     => 2,
               'fare'=> 90,
            ],
            [
               'carrer_level_id'  => 3,
               'select_service_id'        => 6,
               'day_model_id'     => 2,
               'fare'=> 110,
            ],
            [
               'carrer_level_id'  => 1,
               'select_service_id'        => 7,
               'day_model_id'     => 2,
               'fare'=> 180,
            ],
            [
               'carrer_level_id'  => 2,
               'select_service_id'        => 7,
               'day_model_id'     => 2,
               'fare'=> 210,
            ],
            [
               'carrer_level_id'  => 3,
               'select_service_id'        => 7,
               'day_model_id'     => 2,
               'fare'=> 240,
            ],
            [
               'carrer_level_id'  => 1,
               'select_service_id'        => 8,
               'day_model_id'     => 2,
               'fare'=> 100,
            ],
            [
               'carrer_level_id'  => 2, 
               'select_service_id'        => 8, 
               'day_model_id'     => 2,
               'fare'=> 130,
            ],
            [
               'carrer_level_id'  => 3,
               'select_service_id'        => 8,
               'day_model_id'     => 2,
               'fare'=> 160,
            ],
            [
               'carrer_level_id'  => 1,
               'select_service_id'        => 9,
               'day_model_id'     => 2,
               'fare'=> 245,
            ],
            [
               'carrer_level_id'  => 2,
               'select_service_id'        => 9,
               'day_model_id'     => 2,
               'fare'=> 295,
            ],
            [
               'carrer_level_id'  => 3,
               'select_service_id'        => 9,
               'day_model_id'     => 2,
               'fare'=> 345,
            ],
            [
               'carrer_level_id'  => 1,
               'select_service_id'        => 10,
               'day_model_id'     => 2,
               'fare'=> 80,
            ],
            [
               'carrer_level_id'  => 2,
               'select_service_id'        => 10,
               'day_model_id'     => 2,
               'fare'=> 90,
            ],
            [
               'carrer_level_id'  => 3,
               'select_service_id'        => 10,
               'day_model_id'     => 2,
               'fare'=> 100,
            ],
            [
               'carrer_level_id'  => 1,
               'select_service_id'        =>11,
               'day_model_id'     => 2,
               'fare'=> 80,
            ],
            [
               'carrer_level_id'  => 2,
               'select_service_id'        => 11,
               'day_model_id'     => 2,
               'fare'=> 90,
            ],
            [
               'carrer_level_id'  => 3,
               'select_service_id'        => 11,
               'day_model_id'     => 2,
               'fare'=> 100,
            ],
            //2 days
            [
               'carrer_level_id'  => 1, // undergraduate
               'select_service_id'   => 1, // 15
               'day_model_id'     => 3,
               'fare'              =>50,
            ],
            [
               'carrer_level_id'  => 2, // undergraduate
               'select_service_id' => 1, // 10
               'day_model_id'     => 3,
               'fare'=> 60,
            ],
            [
               'carrer_level_id'  => 3,
               'select_service_id'        => 1,
               'day_model_id'     => 3,
               'fare'=> 70,
            ],
            [
               'carrer_level_id'  => 1,
               'select_service_id'        => 2,
               'day_model_id'     => 3,
               'fare'=> 45,
            ],
            [
               'carrer_level_id'  => 2,
               'select_service_id'        => 2,
               'day_model_id'     => 3,
               'fare'=> 55,
            ],
            [
               'carrer_level_id'  => 3,
               'select_service_id'        => 2,
               'day_model_id'     => 3,
               'fare'=> 65,
            ],
            [
               'carrer_level_id'  => 1,
               'select_service_id'        => 3,
               'day_model_id'     => 3,
               'fare'=> 55,
            ],
            [
               'carrer_level_id'  => 2,
               'select_service_id'        => 3,
               'day_model_id'     => 3,
               'fare'=> 65,
            ],
            [
               'carrer_level_id'  => 3,
               'select_service_id'        => 3,
               'day_model_id'     => 3,
               'fare'=> 75,
            ],
            [
               'carrer_level_id'  => 1,
               'select_service_id'        => 4,
               'day_model_id'     => 3,
               'fare'=> 200,
            ],
            [
               'carrer_level_id'  => 2,
               'select_service_id'        => 4,
               'day_model_id'     => 3,
               'fare'=> 220,
            ],
            [
               'carrer_level_id'  => 3, // master
               'select_service_id'        => 4, // 15
               'day_model_id'     => 3,
               'fare'=> 240,
            ],
            [
               'carrer_level_id'  => 1,
               'select_service_id'        => 5,
               'day_model_id'     => 3,
               'fare'=> 90,
            ],
            [
               'carrer_level_id'  => 2,
               'select_service_id'        => 5,
               'day_model_id'     => 3,
               'fare'=> 110,
            ],
            [
               'carrer_level_id'  => 3,
               'select_service_id'        => 5,
               'day_model_id'     => 3,
               'fare'=> 130,
            ],
            [
               'carrer_level_id'  => 1,
               'select_service_id'        => 6,
               'day_model_id'     => 3,
               'fare'=> 100,
            ],
            [
               'carrer_level_id'  => 2,
               'select_service_id'        => 6,
               'day_model_id'     => 3,
               'fare'=> 120,
            ],
            [
               'carrer_level_id'  => 3,
               'select_service_id'        => 6,
               'day_model_id'     => 3,
               'fare'=> 150,
            ],
            [
               'carrer_level_id'  => 1,
               'select_service_id'        => 7,
               'day_model_id'     => 3,
               'fare'=> 245,
            ],
            [
               'carrer_level_id'  => 2,
               'select_service_id'        => 7,
               'day_model_id'     => 3,
               'fare'=> 275,
            ],
            [
               'carrer_level_id'  => 3,
               'select_service_id'        => 7,
               'day_model_id'     => 3,
               'fare'=> 305,
            ],
            [
               'carrer_level_id'  => 1,
               'select_service_id'        => 8,
               'day_model_id'     => 3,
               'fare'=> 145,
            ],
            [
               'carrer_level_id'  => 2, 
               'select_service_id'        => 8, 
               'day_model_id'     => 3,
               'fare'=> 175,
            ],
            [
               'carrer_level_id'  => 3,
               'select_service_id'        => 8,
               'day_model_id'     => 3,
               'fare'=> 205,
            ],
            [
               'carrer_level_id'  => 1,
               'select_service_id'        => 9,
               'day_model_id'     => 3,
               'fare'=> 300,
            ],
            [
               'carrer_level_id'  => 2,
               'select_service_id'        => 9,
               'day_model_id'     => 3,
               'fare'=> 385,
            ],
            [
               'carrer_level_id'  => 3,
               'select_service_id'        => 9,
               'day_model_id'     => 3,
               'fare'=> 440,
            ],
            [
               'carrer_level_id'  => 1,
               'select_service_id'        => 10,
               'day_model_id'     => 3,
               'fare'=> 110,
            ],
            [
               'carrer_level_id'  => 2,
               'select_service_id'        => 10,
               'day_model_id'     => 3,
               'fare'=> 120,
            ],
            [
               'carrer_level_id'  => 3,
               'select_service_id'        => 10,
               'day_model_id'     => 3,
               'fare'=> 130,
            ],
            [
               'carrer_level_id'  => 1,
               'select_service_id'        =>11,
               'day_model_id'     => 3,
               'fare'=> 110,
            ],
            [
               'carrer_level_id'  => 2,
               'select_service_id'        => 11,
               'day_model_id'     => 3,
               'fare'=> 120,
            ],
            [
               'carrer_level_id'  => 3,
               'select_service_id'        => 11,
               'day_model_id'     => 3,
               'fare'=> 130,
            ],
            //1 day
            [
               'carrer_level_id'  => 1, // undergraduate
               'select_service_id'   => 1, // 15
               'day_model_id'     => 4,
               'fare'              =>60,
            ],
            [
               'carrer_level_id'  => 2, // undergraduate
               'select_service_id' => 1, // 10
               'day_model_id'     => 4,
               'fare'=> 70,
            ],
            [
               'carrer_level_id'  => 3,
               'select_service_id'        => 1,
               'day_model_id'     => 4,
               'fare'=> 80,
            ],
            [
               'carrer_level_id'  => 1,
               'select_service_id'        => 2,
               'day_model_id'     => 4,
               'fare'=> 55,
            ],
            [
               'carrer_level_id'  => 2,
               'select_service_id'        => 2,
               'day_model_id'     => 4,
               'fare'=> 65,
            ],
            [
               'carrer_level_id'  => 3,
               'select_service_id'        => 2,
               'day_model_id'     => 4,
               'fare'=> 75,
            ],
            [
               'carrer_level_id'  => 1,
               'select_service_id'        => 3,
               'day_model_id'     => 4,
               'fare'=> 65,
            ],
            [
               'carrer_level_id'  => 2,
               'select_service_id'        => 3,
               'day_model_id'     => 4,
               'fare'=> 75,
            ],
            [
               'carrer_level_id'  => 3,
               'select_service_id'        => 3,
               'day_model_id'     => 4,
               'fare'=> 85,
            ],
            [
               'carrer_level_id'  => 1,
               'select_service_id'        => 4,
               'day_model_id'     => 4,
               'fare'=> 250,
            ],
            [
               'carrer_level_id'  => 2,
               'select_service_id'        => 4,
               'day_model_id'     => 4,
               'fare'=> 270,
            ],
            [
               'carrer_level_id'  => 3, // master
               'select_service_id'        => 4, // 15
               'day_model_id'     => 4,
               'fare'=> 320,
            ],
            [
               'carrer_level_id'  => 1,
               'select_service_id'        => 5,
               'day_model_id'     => 4,
               'fare'=> 110,
            ],
            [
               'carrer_level_id'  => 2,
               'select_service_id'        => 5,
               'day_model_id'     => 4,
               'fare'=> 125,
            ],
            [
               'carrer_level_id'  => 3,
               'select_service_id'        => 5,
               'day_model_id'     => 4,
               'fare'=> 140,
            ],
            [
               'carrer_level_id'  => 1,
               'select_service_id'        => 6,
               'day_model_id'     => 4,
               'fare'=> 120,
            ],
            [
               'carrer_level_id'  => 2,
               'select_service_id'        => 6,
               'day_model_id'     => 4,
               'fare'=> 135,
            ],
            [
               'carrer_level_id'  => 3,
               'select_service_id'        => 6,
               'day_model_id'     => 4,
               'fare'=> 150,
            ],
            [
               'carrer_level_id'  => 1,
               'select_service_id'        => 7,
               'day_model_id'     => 4,
               'fare'=> 300,
            ],
            [
               'carrer_level_id'  => 2,
               'select_service_id'        => 7,
               'day_model_id'     => 4,
               'fare'=> 330,
            ],
            [
               'carrer_level_id'  => 3,
               'select_service_id'        => 7,
               'day_model_id'     => 4,
               'fare'=> 360,
            ],
            [
               'carrer_level_id'  => 1,
               'select_service_id'        => 8,
               'day_model_id'     => 4,
               'fare'=> 175,
            ],
            [
               'carrer_level_id'  => 2, 
               'select_service_id'        => 8, 
               'day_model_id'     => 4,
               'fare'=> 200,
            ],
            [
               'carrer_level_id'  => 3,
               'select_service_id'        => 8,
               'day_model_id'     => 4,
               'fare'=> 225,
            ],
            [
               'carrer_level_id'  => 1,
               'select_service_id'        => 9,
               'day_model_id'     => 4,
               'fare'=> 425,
            ],
            [
               'carrer_level_id'  => 2,
               'select_service_id'        => 9,
               'day_model_id'     => 4,
               'fare'=> 470,
            ],
            [
               'carrer_level_id'  => 3,
               'select_service_id'        => 9,
               'day_model_id'     => 4,
               'fare'=> 515,
            ],
            [
               'carrer_level_id'  => 1,
               'select_service_id'        => 10,
               'day_model_id'     => 4,
               'fare'=> 140,
            ],
            [
               'carrer_level_id'  => 2,
               'select_service_id'        => 10,
               'day_model_id'     => 4,
               'fare'=> 150,
            ],
            [
               'carrer_level_id'  => 3,
               'select_service_id'        => 10,
               'day_model_id'     => 4,
               'fare'=> 160,
            ],
            [
               'carrer_level_id'  => 1,
               'select_service_id'        =>11,
               'day_model_id'     => 4,
               'fare'=> 140,
            ],
            [
               'carrer_level_id'  => 2,
               'select_service_id'        => 11,
               'day_model_id'     => 4,
               'fare'=> 150,
            ],
            [
               'carrer_level_id'  => 3,
               'select_service_id'        => 11,
               'day_model_id'     => 4,
               'fare'=> 160,
            ],   
        ]);
    }
}
