<?php

use Illuminate\Database\Seeder;

class SyllabusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('syllabus')->delete();
        
        \DB::table('syllabus')->insert(array (
            0 => 
            array (
                'syllabus_id' => 801,
                'title' => 'Bangla Syllabus',
                'directory' => 'class8_syllabus.pdf',
                'subject_id' => 81,
                'section_id' => 1,
                'class_id' => 8,
            ),
        ));
        
        
    }
}