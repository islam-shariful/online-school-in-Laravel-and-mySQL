<?php

use Illuminate\Database\Seeder;

class TeacherrTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('teacherr')->delete();
        
        \DB::table('teacherr')->insert(array (
            0 => 
            array (
                'id' => 3,
                'tid' => '20-0004-03',
                'tName' => 'ASIF',
                'gender' => 'Male',
                'dob' => '22/10/1995',
                'department' => 'CSE',
                'email' => 'www.aba333@ymail.com',
                'phone' => '+893472592352',
                'address' => 'sdfgskdllnbldsmlsdgsgds',
            ),
            1 => 
            array (
                'id' => 8,
                'tid' => '20-0005-03',
                'tName' => 'Teacher A',
                'gender' => 'Female',
                'dob' => '13/11/1990',
                'department' => 'Math',
                'email' => 'teacherrrr@gmail.com',
                'phone' => '98756412369',
                'address' => 'jdnedjkfnhsdrgjvnlsndvfgbh',
            ),
        ));
        
        
    }
}