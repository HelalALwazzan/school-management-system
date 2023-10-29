<?php

namespace Database\Seeders;
use App\Models\Classroom;
use App\Models\Grade;
use App\Models\Section;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sections')->delete();

        $sections =
        [
            ['en'=> 'Section A' , 'ar'  =>  'الفصل أ' ],
            ['en'=> 'Section B' , 'ar'  =>  'الفصل ب' ],
            ['en'=> 'Section C' , 'ar'  =>  'الفصل ج' ],

        ];
        // +++++++++++++++++++++++++++++++ Grades Loop +++++++++++++++++++++++++++++++
        for( $i=1 ; $i <= Grade::count() ; $i++ )
        {
            // ================ Primary Stage ================
            if( $i == 1 )
            {
                // Classrooms Loop : 6 Classrooms For "Primary" Stage
                for( $j=1 ; $j <= 6 ; $j++ )
                {
                    foreach ($sections as $section)
                    {
                        Section::create(['Name_Section' =>  $section , "Grade_id"=>$i , "Class_id"=>$j , "Status"=>1 ]);
                    }
                }
            }
            // ================ Middle , High Stage ================
            else
            {
                // Classrooms Loop : 3 Classrooms For "Middle" , "High" Stage
                for( $j=7 ; $j <= 9 ; $j++ )
                {
                    foreach ($sections as $section)
                    {
                        Section::create(['Name_Section' =>  $section , "Grade_id"=>2 , "Class_id"=>$j , "Status"=>1 ]);
                    }
                }
                for( $j=10 ; $j <= 12 ; $j++ )
                {
                    foreach ($sections as $section)
                    {
                        Section::create(['Name_Section' =>  $section , "Grade_id"=>3 , "Class_id"=>$j , "Status"=>1 ]);
                    }
                }
            }
        }
    }
}
