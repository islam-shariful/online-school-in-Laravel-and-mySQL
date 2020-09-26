<?php

use Illuminate\Database\Seeder;

class TeacherTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('teacher')->delete();
        
        \DB::table('teacher')->insert(array (
            0 => 
            array (
                'id' => 1,
                'teacher_id' => '20-8101-03',
                'teachername' => 'Mr. Teacher Bangla',
                'teacheremail' => 'teacherB@gmail.com',
                'teacherdesignation' => 'Lecturer',
                'teacherdepartment' => 'Bangla',
                'teacheraddress' => '98/2,Dhanmondi. 32 Dhaka-1209',
                'teacherdob' => '5/2/1986',
                'teachergender' => 'Male',
                'teacherreligion' => 'Muslim',
                'teacherjoiningdate' => '2010-01-01',
                'teacherfathername' => 'Mr. Khan',
                'teachermothername' => 'Mrs. Khan',
                'subject_id' => 81,
            ),
            1 => 
            array (
                'id' => 2,
                'teacher_id' => '20-8102-03',
                'teachername' => 'Teacher English',
                'teacheremail' => 'teacherE@gmail.com',
                'teacherdesignation' => 'Lecturer',
                'teacherdepartment' => 'English',
                'teacheraddress' => '98/2,Dhanmondi. 32 Dhaka-1209',
                'teacherdob' => '5/2/1986',
                'teachergender' => 'Female',
                'teacherreligion' => 'Muslim',
                'teacherjoiningdate' => '2010-01-01',
                'teacherfathername' => 'Mr. Rahman',
                'teachermothername' => 'Mrs. Rahman',
                'subject_id' => 82,
            ),
            2 => 
            array (
                'id' => 3,
                'teacher_id' => '20-8103-03',
                'teachername' => 'Mr. Teacher Math',
                'teacheremail' => 'teacherM@gmail.com',
                'teacherdesignation' => 'Lecturer',
                'teacherdepartment' => 'Math',
                'teacheraddress' => '98/2,Dhanmondi. 32 Dhaka-1209',
                'teacherdob' => '5/2/1986',
                'teachergender' => 'Male',
                'teacherreligion' => 'Muslim',
                'teacherjoiningdate' => '2010-01-01',
                'teacherfathername' => 'Mr. Alam',
                'teachermothername' => 'Mrs. Alam',
                'subject_id' => 83,
            ),
            3 => 
            array (
                'id' => 4,
                'teacher_id' => '20-8104-03',
                'teachername' => 'Mr. Teacher Science',
                'teacheremail' => 'teacherS@gmail.com',
                'teacherdesignation' => 'Lecturer',
                'teacherdepartment' => 'Science',
                'teacheraddress' => '98/2,Dhanmondi. 32 Dhaka-1209',
                'teacherdob' => '5/2/1986',
                'teachergender' => 'Male',
                'teacherreligion' => 'Muslim',
                'teacherjoiningdate' => '2010-01-01',
                'teacherfathername' => 'Mr. Chowdhury',
                'teachermothername' => 'Mrs. Chowdhury',
                'subject_id' => 84,
            ),
            4 => 
            array (
                'id' => 5,
                'teacher_id' => '20-8105-03',
                'teachername' => 'Teacher Sociology',
                'teacheremail' => 'teacherSS@gmail.com',
                'teacherdesignation' => 'Lecturer',
                'teacherdepartment' => 'Sociology',
                'teacheraddress' => '98/2,Dhanmondi. 32 Dhaka-1209',
                'teacherdob' => '5/2/1986',
                'teachergender' => 'Female',
                'teacherreligion' => 'Muslim',
                'teacherjoiningdate' => '2010-01-01',
                'teacherfathername' => 'Mr. Haque',
                'teachermothername' => 'Mrs. Haque',
                'subject_id' => 85,
            ),
            5 => 
            array (
                'id' => 6,
                'teacher_id' => '20-8106-03',
                'teachername' => 'Mr. Teacher Religion',
                'teacheremail' => 'teacherR@gmail.com',
                'teacherdesignation' => 'Lecturer',
                'teacherdepartment' => 'Religion',
                'teacheraddress' => '98/2,Dhanmondi. 32 Dhaka-1209',
                'teacherdob' => '5/2/1986',
                'teachergender' => 'Male',
                'teacherreligion' => 'Muslim',
                'teacherjoiningdate' => '2010-01-01',
                'teacherfathername' => 'Mr. Kabir',
                'teachermothername' => 'Mrs. Kabir',
                'subject_id' => 86,
            ),
            6 => 
            array (
                'id' => 7,
                'teacher_id' => '20-8107-03',
                'teachername' => 'Mr. Teacher ICT',
                'teacheremail' => 'teacherICT@gmail.com',
                'teacherdesignation' => 'Lecturer',
                'teacherdepartment' => 'ICT',
                'teacheraddress' => '98/2,Dhanmondi. 32 Dhaka-1209',
                'teacherdob' => '5/2/1986',
                'teachergender' => 'Male',
                'teacherreligion' => 'Muslim',
                'teacherjoiningdate' => '2010-01-01',
                'teacherfathername' => 'Mr. Islam',
                'teachermothername' => 'Mrs. Islam',
                'subject_id' => 87,
            ),
            7 => 
            array (
                'id' => 8,
                'teacher_id' => '20-8108-03',
                'teachername' => 'Mr. Teacher World Knowledge',
                'teacheremail' => 'teacherWK@gmail.com',
                'teacherdesignation' => 'Lecturer',
                'teacherdepartment' => 'World Knowledge',
                'teacheraddress' => '98/2,Dhanmondi. 32 Dhaka-1209',
                'teacherdob' => '5/2/1986',
                'teachergender' => 'Male',
                'teacherreligion' => 'Muslim',
                'teacherjoiningdate' => '2010-01-01',
                'teacherfathername' => 'Mr. Khan',
                'teachermothername' => 'Mrs. Khan',
                'subject_id' => 88,
            ),
            8 => 
            array (
                'id' => 9,
                'teacher_id' => '20-8109-03',
                'teachername' => 'Teacher Home Economics',
                'teacheremail' => 'teacherHE@gmail.com',
                'teacherdesignation' => 'Lecturer',
                'teacherdepartment' => 'Home Economics',
                'teacheraddress' => '98/2,Dhanmondi. 32 Dhaka-1209',
                'teacherdob' => '5/2/1986',
                'teachergender' => 'Female',
                'teacherreligion' => 'Muslim',
                'teacherjoiningdate' => '2010-01-01',
                'teacherfathername' => 'Mr. Rahman',
                'teachermothername' => 'Mrs. Rahman',
                'subject_id' => 89,
            ),
            9 => 
            array (
                'id' => 10,
                'teacher_id' => '20-8100-03',
                'teachername' => 'Mr. Teacher Agriculture',
                'teacheremail' => 'teacherA@gmail.com',
                'teacherdesignation' => 'Lecturer',
                'teacherdepartment' => 'Agriculture',
                'teacheraddress' => '98/2,Dhanmondi. 32 Dhaka-1209',
                'teacherdob' => '5/2/1986',
                'teachergender' => 'Male',
                'teacherreligion' => 'Muslim',
                'teacherjoiningdate' => '2010-01-01',
                'teacherfathername' => 'Mr. Alam',
                'teachermothername' => 'Mrs. Alam',
                'subject_id' => 80,
            ),
        ));
        
        
    }
}