<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('student')->delete();
        
        \DB::table('student')->insert(array (
            0 => 
            array (
                'id' => 1,
                'student_id' => '20-8101-04',
                'class_id' => 8,
                'section_id' => 1,
                'studentname' => 'Student',
                'studentemail' => 'studen8101@gmail.com',
                'studentaddress' => '58/2 A, Mirpur,Dhaka',
                'studentimage' => 'student.jpg',
                'studentbloodgroup' => 'B+',
                'studentfathername' => 'Mr. Rahman',
                'studentmothername' => 'Mrs. Rahman',
                'guardiannumber' => 1456328975,
                'admissionclass' => 'One',
                'studentdob' => '5/08/2004',
                'studentgender' => 'Male',
                'studentreligion' => 'Muslim',
                'admissiondate' => '2012-01-01',
                'disorder' => 'No',
                'allergic' => 'No',
                'heartproblem' => 'No',
                'otherdisease' => 'No',
            ),
        ));
        
        
    }
}