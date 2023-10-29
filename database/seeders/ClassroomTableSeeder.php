<?php

namespace Database\Seeders;

use App\Models\Grade;
use App\Models\Classroom;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClassroomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('classrooms')->delete();
        $classrooms1 =
        [
            ['en'=> 'Class 1' , 'ar'  =>  'الصف الاول'   ],
            ['en'=> 'Class 2' , 'ar'  =>  'الصف الثاني' ],
            ['en'=> 'Class 3' , 'ar'  =>  'الصف الثالث' ],
            ['en'=> 'Class 4' , 'ar'  =>  'الصف الرابع' ],
            ['en'=> 'Class 5' , 'ar'  =>  'الصف الخامس' ],
            ['en'=> 'Class 6' , 'ar'  =>  'الصف السادس' ],
        ];
        // +++++++++++++++++ 2- Middle School Stage : المرحلة الاعدادية +++++++++++++++++
        $classrooms2 =
        [
            ['en'=> 'Class 1' , 'ar'  =>  'الصف السابع'   ],
            ['en'=> 'Class 2' , 'ar'  =>  'الصف الثامن' ],
            ['en'=> 'Class 3' , 'ar'  =>  'الصف التاسع' ],
        ];
        // +++++++++++++++++ 3- High School Stage : المرحلة الثانوية +++++++++++++++++
        $classrooms3 =
        [
            ['en'=> 'Class 1' , 'ar'  =>  'الصف الاول الثانوي'   ],
            ['en'=> 'Class 2' , 'ar'  =>  'الصف الثاني الثانوي' ],
            ['en'=> 'Class 3' , 'ar'  =>  'الصف الثالث الثانوي' ],
        ];
        // ============================ 1- Primary Stage : المرحلة الابتدائية ============================
        foreach ($classrooms1 as $classroom)
        {
            Classroom::create(['Name_Class' => $classroom , "Grade_id"=>1]);
        }
        // ============================ 2- Middle School Stage : المرحلة الاعدادية ============================
        foreach ($classrooms2 as $classroom)
        {
            Classroom::create(['Name_Class' => $classroom , "Grade_id" => 2]);
        }
        // ============================ 3- High School Stage : المرحلة الثانوية ============================
        foreach ($classrooms3 as $classroom)
        {
            Classroom::create(['Name_Class' => $classroom , "Grade_id" => 3]);
        }
    }
}
