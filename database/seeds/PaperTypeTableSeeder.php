<?php

use App\PaperType;
use Illuminate\Database\Seeder;

class PaperTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaperType::insert([
            [
                "id"    =>  1,
                "name"  =>  "Essay",
            ],
            [
                "id"    =>  2,
                "name"  =>  "Term Paper",
            ],
            [
                "id"    =>  3,
                "name"  =>  "Research Paper",
            ],
            [
                "id"    =>  4,
                "name"  =>  "Course Work",
            ],
            [
                "id"    =>  5,
                "name"  =>  "Thesis Proposal",
            ],
            [
                "id"    =>  6,
                "name"  =>  "Dissertation Chapter- Abstract",
            ],
            [
                "id"    =>  7,
                "name"  =>  "Dissertation Chapter- Introduction Chapter",
            ],
            [
                "id"    =>  8,
                "name"  =>  "Dissertation Chapter- Literature Review",
            ],
            [
                "id"    =>  9,
                "name"  =>  "Dissertation Chapter- Methodology",
            ],
            [
                "id"    =>  10,
                "name"  =>  " Dissertation Chapter- Result",
            ],
            [
                "id"    =>  11,
                "name"  =>  "Dissertation Chapter- Discussion",
            ],
            [
                "id"    =>  12,
                "name"  =>  "Book Report",
            ],
            [
                "id"    =>  13,
                "name"  =>  "Book Review",
            ],
            [
                "id"    =>  14,
                "name"  =>  "Movie Review",
            ],
            [
                "id"    =>  15,
                "name"  =>  "Research Proposal",
            ],
            [
                "id"    =>  16,
                "name"  =>  "Case Study",
            ],
            [
                "id"    =>  17,
                "name"  =>  "Article",
            ],
            [
                "id"    =>  18,
                "name"  =>  "Annotated Bibliography",
            ],
            [
                "id"    =>  19,
                "name"  =>  "Power Point Presentation",
            ],
            [
                "id"    =>  20,
                "name"  =>  "Admission Essays",
            ],
            [
                "id"    =>  21,
                "name"  =>  "Admission Sevices - Editing",
            ],
            [
                "id"    =>  22,
                "name"  =>  "Scholarship Essay",
            ],
            [
                "id"    =>  23,
                "name"  =>  "Personal Statement",
            ],
            [
                "id"    =>  24,
                "name"  =>  "Editing",
            ],
            [
                "id"    =>  25,
                "name"  =>  "Formating",
            ],
            [
                "id"    =>  26,
                "name"  =>  "Multiple Choice Questions(Non time framed)",
            ],
            [
                "id"    =>  27,
                "name"  =>  "Multiple Choice Questions(time framed)",
            ],
            [
                "id"    =>  28,
                "name"  =>  "Math Problem",
            ],
            [
                "id"    =>  29,
                "name"  =>  "Assignment",
            ],
            [
                "id"    =>  30,
                "name"  =>  "Paraphrasing",
            ],
        ]);
    }
}
