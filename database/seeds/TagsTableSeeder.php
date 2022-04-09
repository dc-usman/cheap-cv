<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::insert([
            [
                'name' => 'Tag 1',
            ],
            [
                'name' => 'Tag 2',
            ],
            [
                'name' => 'Tag 3',
            ],
        ]);
    }
}
