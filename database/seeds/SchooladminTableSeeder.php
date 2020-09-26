<?php

use Illuminate\Database\Seeder;

class SchooladminTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('schooladmin')->delete();
        
        \DB::table('schooladmin')->insert(array (
            0 => 
            array (
                'id' => 1,
                'schooladmin_id' => '20-0000-02',
                'schooladminname' => 'raiyanislammmm',
                'schooladminemail' => 'raiyan@gmail.com',
            ),
            1 => 
            array (
                'id' => 2,
                'schooladmin_id' => '20-0001-02',
                'schooladminname' => 'Shihab Shahib',
                'schooladminemail' => '123456@gmail.com',
            ),
            2 => 
            array (
                'id' => 4,
                'schooladmin_id' => '20-0002-02',
                'schooladminname' => 'yhvghbjn',
                'schooladminemail' => 'jnfkjncjc@gmail.com',
            ),
            3 => 
            array (
                'id' => 5,
                'schooladmin_id' => '20-0003-02',
                'schooladminname' => 'uxdcfgvbhjn',
                'schooladminemail' => 'student@example.com',
            ),
            4 => 
            array (
                'id' => 6,
                'schooladmin_id' => '20-0004-02',
                'schooladminname' => 'ofyghjm',
                'schooladminemail' => 'student001@student.ac.bd',
            ),
        ));
        
        
    }
}