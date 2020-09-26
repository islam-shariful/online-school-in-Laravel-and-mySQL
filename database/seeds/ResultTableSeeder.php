<?php

use Illuminate\Database\Seeder;

class ResultTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('result')->delete();
        
        \DB::table('result')->insert(array (
            0 => 
            array (
                'result_id' => 8801,
                'class_id' => 8,
                'section_id' => 1,
                'attendance' => 30,
                'midmarks' => 80,
                'finalmarks' => 80,
                'total' => 190,
                'subject_id' => 83,
                'student_id' => '20-8101-04',
            ),
            1 => 
            array (
                'result_id' => 8802,
                'class_id' => 8,
                'section_id' => 1,
                'attendance' => 30,
                'midmarks' => 60,
                'finalmarks' => 60,
                'total' => 150,
                'subject_id' => 89,
                'student_id' => '20-8101-04',
            ),
            2 => 
            array (
                'result_id' => 8003,
                'class_id' => 8,
                'section_id' => 1,
                'attendance' => 20,
                'midmarks' => 50,
                'finalmarks' => 80,
                'total' => 150,
                'subject_id' => 81,
                'student_id' => '20-8101-04',
            ),
            3 => 
            array (
                'result_id' => 8004,
                'class_id' => 8,
                'section_id' => 1,
                'attendance' => 30,
                'midmarks' => 55,
                'finalmarks' => 90,
                'total' => 175,
                'subject_id' => 82,
                'student_id' => '20-8101-04',
            ),
            4 => 
            array (
                'result_id' => 8005,
                'class_id' => 8,
                'section_id' => 1,
                'attendance' => 30,
                'midmarks' => 58,
                'finalmarks' => 85,
                'total' => 173,
                'subject_id' => 86,
                'student_id' => '20-8101-04',
            ),
            5 => 
            array (
                'result_id' => 8006,
                'class_id' => 8,
                'section_id' => 1,
                'attendance' => 20,
                'midmarks' => 35,
                'finalmarks' => 50,
                'total' => 105,
                'subject_id' => 84,
                'student_id' => '20-8101-04',
            ),
        ));
        
        
    }
}