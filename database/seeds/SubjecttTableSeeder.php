<?php

use Illuminate\Database\Seeder;

class SubjecttTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('subjectt')->delete();
        
        \DB::table('subjectt')->insert(array (
            0 => 
            array (
                'id' => 1,
                'sName' => 'fgsdg',
                'sCode' => 'sgsdgs',
                'sType' => 'Theory',
                'sClass' => 'Play',
            ),
            1 => 
            array (
                'id' => 3,
                'sName' => 'fgsdgf',
                'sCode' => '4336h',
                'sType' => 'Theory',
                'sClass' => 'Play',
            ),
            2 => 
            array (
                'id' => 4,
                'sName' => 'wertyui',
                'sCode' => '3456',
                'sType' => 'Lab',
                'sClass' => 'Nursery',
            ),
            3 => 
            array (
                'id' => 5,
                'sName' => 't',
                'sCode' => '4336h',
                'sType' => 'Theory',
                'sClass' => '1',
            ),
            4 => 
            array (
                'id' => 8,
                'sName' => 'jklko;lk',
                'sCode' => 'dfhdfhd',
                'sType' => 'Lab',
                'sClass' => '1',
            ),
            5 => 
            array (
                'id' => 9,
                'sName' => 'eeee',
                'sCode' => 'eeeee',
                'sType' => 'Lab',
                'sClass' => '1',
            ),
            6 => 
            array (
                'id' => 11,
                'sName' => 'try',
                'sCode' => '',
                'sType' => '',
                'sClass' => '0',
            ),
            7 => 
            array (
                'id' => 12,
                'sName' => 'physics',
                'sCode' => '98765',
                'sType' => 'Theory',
                'sClass' => '5',
            ),
        ));
        
        
    }
}