<?php

use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('event')->delete();
        
        \DB::table('event')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Christmas',
                'starting' => '25 December',
                'ending' => '25 December',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Craft Day',
                'starting' => '06 January',
                'ending' => '06 January',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'School Picnic',
                'starting' => '20 January',
                'ending' => '30 January',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Multicultural Fair',
                'starting' => '25 February',
                'ending' => '29 February',
            ),
        ));
        
        
    }
}