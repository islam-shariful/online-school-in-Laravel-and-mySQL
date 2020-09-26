<?php

use Illuminate\Database\Seeder;

class SubjectTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('subject')->delete();
        
        \DB::table('subject')->insert(array (
            0 => 
            array (
                'subject_id' => 81,
                'subjectname' => 'Bangla',
                'class_id' => 8,
            ),
            1 => 
            array (
                'subject_id' => 82,
                'subjectname' => 'English',
                'class_id' => 8,
            ),
            2 => 
            array (
                'subject_id' => 83,
                'subjectname' => 'Math',
                'class_id' => 8,
            ),
            3 => 
            array (
                'subject_id' => 84,
                'subjectname' => 'Science',
                'class_id' => 8,
            ),
            4 => 
            array (
                'subject_id' => 85,
                'subjectname' => 'Sociology',
                'class_id' => 8,
            ),
            5 => 
            array (
                'subject_id' => 86,
                'subjectname' => 'Religion',
                'class_id' => 8,
            ),
            6 => 
            array (
                'subject_id' => 87,
                'subjectname' => 'ICT',
                'class_id' => 8,
            ),
            7 => 
            array (
                'subject_id' => 88,
                'subjectname' => 'World Knowledge',
                'class_id' => 8,
            ),
            8 => 
            array (
                'subject_id' => 89,
                'subjectname' => 'Home Economics',
                'class_id' => 8,
            ),
            9 => 
            array (
                'subject_id' => 80,
                'subjectname' => 'Agriculture',
                'class_id' => 8,
            ),
        ));
        
        
    }
}