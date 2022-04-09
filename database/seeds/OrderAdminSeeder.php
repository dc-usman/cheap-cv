<?php

use App\OrderAdmin;
use Illuminate\Database\Seeder;

class OrderAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        OrderAdmin::insert([
            [
                'entry'=> 'entry1',
            ],
            [
                'entry'=> 'entry2',
            ],
            [
                'entry'=>'entry3',
            ],
        ]);
        
    }
}
