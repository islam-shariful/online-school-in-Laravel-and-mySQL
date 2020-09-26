<?php

use Illuminate\Database\Seeder;

class NoticeboardTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('noticeboard')->delete();
        
        \DB::table('noticeboard')->insert(array (
            0 => 
            array (
                'id' => 12,
                'nTitle' => 'Summer Vacation',
                'nDetails' => 'School Will Remain Close Due to summer Holiday. From 11 January to 12 July.',
                'pBy' => 'Admin',
                'Date' => '20/08/2020',
            ),
            1 => 
            array (
                'id' => 13,
                'nTitle' => 'try',
                'nDetails' => '',
                'pBy' => '20-0002-02',
                'Date' => '',
            ),
        ));
        
        
    }
}