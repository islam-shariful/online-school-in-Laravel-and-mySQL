<?php

use Illuminate\Database\Seeder;

class StudenttTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('studentt')->delete();
        
        \DB::table('studentt')->insert(array (
            0 => 
            array (
                'id' => 7,
                'sName' => 'MD. ASiF B. ABEDIN',
                'sid' => '20-0001-04',
                'fName' => 'MD. JAINAL ABEDIN',
                'mName' => 'KHODEZA BEGUM',
                'gender' => 'Male',
                'dob' => '22/10/1995',
                'admissionDate' => '14/08/2020',
                'bGroup' => 'A+',
                'religion' => 'Islam',
                'eMail' => 'WWW.ABA333@YMAIL.COM',
                'admissionClass' => '3',
                'section' => 'Neptune',
                'gPN' => '01964614266',
                'address' => 'BASHUNDHARA R/A, DHAKA-1200.',
                'myImage' => '',
            ),
            1 => 
            array (
                'id' => 45,
                'sName' => 'Student 02',
                'sid' => '20-0002-04',
                'fName' => 'Mr khan',
                'mName' => 'Mrs khan',
                'gender' => 'Male',
                'dob' => '13/11/2005',
                'admissionDate' => '18/08/2020',
                'bGroup' => 'A+',
                'religion' => 'Islam',
                'eMail' => 'student@gmail.com',
                'admissionClass' => '9',
                'section' => 'Jupiter',
                'gPN' => '78945612352',
                'address' => 'gjcvhbkxfcgv',
                'myImage' => 'teacher.png',
            ),
        ));
        
        
    }
}