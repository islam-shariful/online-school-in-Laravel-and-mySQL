<?php

use Illuminate\Database\Seeder;

class LostfoundTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lostfound')->delete();
        
        \DB::table('lostfound')->insert(array (
            0 => 
            array (
                'lostfound_id' => 1,
                'lostname' => 'Water Bottle',
                'lostdescription' => 'White color bottle',
                'lostday' => '2020-09-01',
                'found' => 'yes',
                'received' => 'not',
            ),
            1 => 
            array (
                'lostfound_id' => 2,
                'lostname' => 'Pencil Box',
                'lostdescription' => 'Blue color box with two pencils',
                'lostday' => '2020-07-02',
                'found' => 'not',
                'received' => 'not',
            ),
            2 => 
            array (
                'lostfound_id' => 3,
                'lostname' => 'Water Bottle',
                'lostdescription' => 'Blue color water bottle',
                'lostday' => '2020-06-11',
                'found' => 'yes',
                'received' => 'not',
            ),
            3 => 
            array (
                'lostfound_id' => 4,
                'lostname' => 'Umbrella',
                'lostdescription' => 'White color umbrella',
                'lostday' => '2020-07-11',
                'found' => 'yes',
                'received' => 'not',
            ),
            4 => 
            array (
                'lostfound_id' => 5,
                'lostname' => 'TiffinBox',
                'lostdescription' => 'Red small tiffin box',
                'lostday' => '2020-05-11',
                'found' => 'yes',
                'received' => 'not',
            ),
            5 => 
            array (
                'lostfound_id' => 6,
                'lostname' => 'Notebook',
                'lostdescription' => 'English Notebook _class four',
                'lostday' => '2020-06-11',
                'found' => 'yes',
                'received' => 'not',
            ),
            6 => 
            array (
                'lostfound_id' => 7,
                'lostname' => 'Watch',
                'lostdescription' => 'black color watch',
                'lostday' => '2020-06-11',
                'found' => 'yes',
                'received' => 'not',
            ),
            7 => 
            array (
                'lostfound_id' => 10,
                'lostname' => 'Water Bottle',
                'lostdescription' => 'White color bottle',
                'lostday' => '2020-09-01',
                'found' => 'yes',
                'received' => 'not',
            ),
            8 => 
            array (
                'lostfound_id' => 11,
                'lostname' => 'pencil bag',
                'lostdescription' => 'White color pencilbag',
                'lostday' => '2020-09-01',
                'found' => 'yes',
                'received' => 'not',
            ),
            9 => 
            array (
                'lostfound_id' => 12,
                'lostname' => 'Sweater',
                'lostdescription' => 'White color ',
                'lostday' => '2020-09-01',
                'found' => 'yes',
                'received' => 'not',
            ),
            10 => 
            array (
                'lostfound_id' => 13,
                'lostname' => 'calculator',
                'lostdescription' => '991-ES Scientific calculator',
                'lostday' => '2020-09-01',
                'found' => 'yes',
                'received' => 'not',
            ),
        ));
        
        
    }
}