<?php

use Illuminate\Database\Seeder;

class NoticeTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('notice')->delete();
        
        \DB::table('notice')->insert(array (
            0 => 
            array (
                'notice_id' => 10,
                'noticedate' => '2020-08-10 00:00:00',
                'class_id' => 8,
                'subject_id' => 81,
                'section_id' => 1,
                'description' => 'Today\'s class cancel.',
            ),
            1 => 
            array (
                'notice_id' => 10,
                'noticedate' => '2020-08-11 00:00:00',
                'class_id' => 8,
                'subject_id' => 86,
                'section_id' => 1,
                'description' => 'Class test in 20th August',
            ),
            2 => 
            array (
                'notice_id' => 10,
                'noticedate' => '2020-08-05 00:00:00',
                'class_id' => 8,
                'subject_id' => 85,
                'section_id' => 1,
                'description' => 'Submit your assignment before 15th august',
            ),
        ));
        
        
    }
}