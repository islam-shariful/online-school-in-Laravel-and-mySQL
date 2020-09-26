<?php

use Illuminate\Database\Seeder;

class AssignmentTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('assignment')->delete();
        
        \DB::table('assignment')->insert(array (
            0 => 
            array (
                'assignment_id' => 8001,
                'filename' => 'Bangla Assignment',
                'directory' => 'class8_syllabus.pdf',
                'date' => '2020-07-09',
                'duedate' => '2020-08-12',
                'class_id' => 8,
                'section_id' => 1,
                'subject_id' => 81,
            ),
            1 => 
            array (
                'assignment_id' => 8002,
                'filename' => 'English Assignment',
            'directory' => 'Lab_EXam (1).pdf',
                'date' => '2020-08-12',
                'duedate' => '2020-08-12',
                'class_id' => 8,
                'section_id' => 1,
                'subject_id' => 82,
            ),
        ));
        
        
    }
}