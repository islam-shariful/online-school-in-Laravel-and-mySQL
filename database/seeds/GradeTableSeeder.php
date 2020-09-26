<?php

use Illuminate\Database\Seeder;

class GradeTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('grade')->delete();
        
        \DB::table('grade')->insert(array (
            0 => 
            array (
                'grade_id' => 8801,
                'student_id' => '20-8101-04',
                'subject_id' => 83,
                'class_id' => 8,
                'finalgrade' => 'A+',
                'section_id' => 1,
            ),
            1 => 
            array (
                'grade_id' => 8802,
                'student_id' => '20-8101-04',
                'subject_id' => 89,
                'class_id' => 8,
                'finalgrade' => 'A',
                'section_id' => 1,
            ),
            2 => 
            array (
                'grade_id' => 2582,
                'student_id' => '20-8826-04',
                'subject_id' => 83,
                'class_id' => 8,
                'finalgrade' => 'A',
                'section_id' => 1,
            ),
            3 => 
            array (
                'grade_id' => 8562,
                'student_id' => '20-8101-04',
                'subject_id' => 96,
                'class_id' => 9,
                'finalgrade' => 'o',
                'section_id' => 1,
            ),
            4 => 
            array (
                'grade_id' => 2582,
                'student_id' => '20-8101-04',
                'subject_id' => 85,
                'class_id' => 8,
                'finalgrade' => 'A',
                'section_id' => 1,
            ),
        ));
        
        
    }
}