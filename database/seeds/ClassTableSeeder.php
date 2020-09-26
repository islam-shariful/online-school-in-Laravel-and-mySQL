<?php

use Illuminate\Database\Seeder;

class ClassTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('class')->delete();
        
        \DB::table('class')->insert(array (
            0 => 
            array (
                'class_id' => 8,
                'classname' => 'Eight',
            ),
        ));
        
        
    }
}