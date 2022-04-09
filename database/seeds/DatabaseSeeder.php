<?php

use App\Carrer_Level;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserTableSeeder::class,
            SubjectTableSeeder::class,
            PaperTypeTableSeeder::class,
            ReferenceTableSeeder::class,
            CategoryTableSeeder::class,
            TagsTableSeeder::class,
            AcademicLevelTableSeeder::class,
            CountryTableSeeder::class,
            DeadlineTableSeeder::class,
            CarrerLevelTable::class,
            CarrerLevelSeeder::class,
            SelectServicesSeeder::class,
            DayModelSeeder::class,
            FareTableSeeder::class,
            WebSettingTableSeeder::class,
            ServiceTableSeeder::class,
            
        ]);
    }
}
