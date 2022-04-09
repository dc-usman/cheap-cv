<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            [
                'name' => 'Education',
            ],
            [
                'name' => 'Health',
            ],
            [
                'name' => 'Content Writing',
            ],
        ]);
    }
}
