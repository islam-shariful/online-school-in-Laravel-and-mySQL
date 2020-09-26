<?php

use Illuminate\Database\Seeder;

class SectionTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('section')->delete();
        
        \DB::table('section')->insert(array (
            0 => 
            array (
                'section_id' => 801,
                'class_id' => 8,
                'sectionname' => 'A',
                'classteacher' => 'Mr. Teacher Bangla',
                'subject_id' => 1,
            ),
            1 => 
            array (
                'section_id' => 802,
                'class_id' => 8,
                'sectionname' => 'B',
                'classteacher' => 'Mr. Teacher English',
                'subject_id' => 2,
            ),
        ));
        
        
    }
}