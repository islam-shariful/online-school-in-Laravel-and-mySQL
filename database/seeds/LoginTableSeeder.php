<?php

use Illuminate\Database\Seeder;

class LoginTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('login')->delete();
        
        \DB::table('login')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => '20-8101-04',
                'userpassword' => 'Student-902',
                'usertype' => 'student',
            ),
            1 => 
            array (
                'id' => 3,
                'user_id' => '20-0000-01',
                'userpassword' => 'Raiyan123@#',
                'usertype' => 'superadmin',
            ),
            2 => 
            array (
                'id' => 5,
                'user_id' => '20-8101-03',
                'userpassword' => 'Teacher-902',
                'usertype' => 'teacher',
            ),
            3 => 
            array (
                'id' => 6,
                'user_id' => '20-8102-03',
                'userpassword' => 'Teacher-902',
                'usertype' => 'teacher',
            ),
            4 => 
            array (
                'id' => 7,
                'user_id' => '20-8103-03',
                'userpassword' => 'Teacher-902',
                'usertype' => 'teacher',
            ),
            5 => 
            array (
                'id' => 8,
                'user_id' => '20-8104-03',
                'userpassword' => 'Teacher-902',
                'usertype' => 'teacher',
            ),
            6 => 
            array (
                'id' => 9,
                'user_id' => '20-8105-03',
                'userpassword' => 'Teacher-902',
                'usertype' => 'teacher',
            ),
            7 => 
            array (
                'id' => 10,
                'user_id' => '20-8106-03',
                'userpassword' => 'Teacher-902',
                'usertype' => 'teacher',
            ),
            8 => 
            array (
                'id' => 11,
                'user_id' => '20-8107-03',
                'userpassword' => 'Teacher-902',
                'usertype' => 'teacher',
            ),
            9 => 
            array (
                'id' => 12,
                'user_id' => '20-8108-03',
                'userpassword' => 'Teacher-902',
                'usertype' => 'teacher',
            ),
            10 => 
            array (
                'id' => 13,
                'user_id' => '20-8109-03',
                'userpassword' => 'Teacher-902',
                'usertype' => 'teacher',
            ),
            11 => 
            array (
                'id' => 14,
                'user_id' => '20-8110-03',
                'userpassword' => 'Teacher-902',
                'usertype' => 'teacher',
            ),
            12 => 
            array (
                'id' => 16,
                'user_id' => '20-0002-04',
                'userpassword' => '5nb-q35',
                'usertype' => 'student',
            ),
            13 => 
            array (
                'id' => 17,
                'user_id' => '20-0001-02',
                'userpassword' => 'Schooladmin-902',
                'usertype' => 'schooladmin',
            ),
            14 => 
            array (
                'id' => 19,
                'user_id' => '20-0002-02',
                'userpassword' => 'Schooladmin-902',
                'usertype' => 'schooladmin',
            ),
            15 => 
            array (
                'id' => 20,
                'user_id' => '20-0003-02',
                'userpassword' => 'Schooladmin-92',
                'usertype' => 'schooladmin',
            ),
            16 => 
            array (
                'id' => 21,
                'user_id' => '20-0004-02',
                'userpassword' => 'Raiyan123@#',
                'usertype' => 'schooladmin',
            ),
            17 => 
            array (
                'id' => 22,
                'user_id' => '20-8101-05',
                'userpassword' => 'Parent-902',
                'usertype' => 'parent',
            ),
        ));
        
        
    }
}