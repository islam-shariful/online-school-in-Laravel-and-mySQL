<?php

use Illuminate\Database\Seeder;

class NoteTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('note')->delete();
        
        \DB::table('note')->insert(array (
            0 => 
            array (
                'note_id' => 801,
                'filename' => 'Bangla',
                'directory' => 'class8_syllabus.pdf',
                'date' => '2020-05-13',
                'subject_id' => 81,
                'section_id' => 1,
                'class_id' => 8,
            ),
            1 => 
            array (
                'note_id' => 802,
                'filename' => 'English',
                'directory' => '2dfe9cc400d3d74b6ca254230b9d71af.png',
                'date' => '2020-07-09',
                'subject_id' => 82,
                'section_id' => 1,
                'class_id' => 8,
            ),
        ));
        
        
    }
}