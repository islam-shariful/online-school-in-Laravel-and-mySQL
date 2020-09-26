<?php

use Illuminate\Database\Seeder;

class RoutineTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('routine')->delete();
        
        \DB::table('routine')->insert(array (
            0 => 
            array (
                'routine_id' => 801,
                'class_id' => 8,
                'section_id' => 1,
                'teacher_id' => '20-8101-03',
                'startingtime' => '09:00:00',
                'endingtime' => '10:00:00',
                'day' => 'Sunday',
                'subject_id' => 81,
                'teachername' => 'Mr. Teacher Bangla',
                'sectionname' => 'A',
                'subjectname' => 'Bangla',
            ),
            1 => 
            array (
                'routine_id' => 802,
                'class_id' => 8,
                'section_id' => 1,
                'teacher_id' => '20-8102-03',
                'startingtime' => '10:00:00',
                'endingtime' => '11:00:00',
                'day' => 'Sunday',
                'subject_id' => 82,
                'teachername' => 'Mr. Teacher English',
                'sectionname' => 'A',
                'subjectname' => 'English',
            ),
            2 => 
            array (
                'routine_id' => 803,
                'class_id' => 8,
                'section_id' => 1,
                'teacher_id' => '20-8103-03',
                'startingtime' => '11:00:00',
                'endingtime' => '12:00:00',
                'day' => 'Sunday',
                'subject_id' => 83,
                'teachername' => 'Mr. Teacher Math',
                'sectionname' => 'A',
                'subjectname' => 'Math',
            ),
            3 => 
            array (
                'routine_id' => 804,
                'class_id' => 8,
                'section_id' => 1,
                'teacher_id' => '20-8104-03',
                'startingtime' => '13:00:00',
                'endingtime' => '14:00:00',
                'day' => 'Sunday',
                'subject_id' => 84,
                'teachername' => 'Mr. Teacher Science',
                'sectionname' => 'A',
                'subjectname' => 'Science',
            ),
            4 => 
            array (
                'routine_id' => 805,
                'class_id' => 8,
                'section_id' => 1,
                'teacher_id' => '20-8105-03',
                'startingtime' => '09:00:00',
                'endingtime' => '10:00:00',
                'day' => 'Saturday',
                'subject_id' => 85,
                'teachername' => 'Mr. Teacher Sociology',
                'sectionname' => 'A',
                'subjectname' => 'Sociology',
            ),
            5 => 
            array (
                'routine_id' => 806,
                'class_id' => 8,
                'section_id' => 1,
                'teacher_id' => '20-8106-03',
                'startingtime' => '10:00:00',
                'endingtime' => '11:00:00',
                'day' => 'Saturday',
                'subject_id' => 86,
                'teachername' => 'Mr. Teacher Religion',
                'sectionname' => 'A',
                'subjectname' => 'Religion',
            ),
            6 => 
            array (
                'routine_id' => 807,
                'class_id' => 8,
                'section_id' => 1,
                'teacher_id' => '20-8107-03',
                'startingtime' => '11:00:00',
                'endingtime' => '12:00:00',
                'day' => 'Saturday',
                'subject_id' => 87,
                'teachername' => 'Mr. Teacher ICT',
                'sectionname' => 'A',
                'subjectname' => 'ICT',
            ),
            7 => 
            array (
                'routine_id' => 808,
                'class_id' => 8,
                'section_id' => 1,
                'teacher_id' => '20-8108-03',
                'startingtime' => '13:00:00',
                'endingtime' => '14:00:00',
                'day' => 'Saturday',
                'subject_id' => 88,
                'teachername' => 'Mr. Teacher World Knowledge',
                'sectionname' => 'A',
                'subjectname' => 'World Knowledge',
            ),
            8 => 
            array (
                'routine_id' => 809,
                'class_id' => 8,
                'section_id' => 1,
                'teacher_id' => '20-8109-03',
                'startingtime' => '09:00:00',
                'endingtime' => '10:00:00',
                'day' => 'Monday',
                'subject_id' => 89,
                'teachername' => 'Mr. Teacher Home Economics',
                'sectionname' => 'A',
                'subjectname' => 'Home Economics',
            ),
            9 => 
            array (
                'routine_id' => 800,
                'class_id' => 8,
                'section_id' => 1,
                'teacher_id' => '20-8100-03',
                'startingtime' => '10:00:00',
                'endingtime' => '11:00:00',
                'day' => 'Monday',
                'subject_id' => 80,
                'teachername' => 'Mr. Teacher Agriculture',
                'sectionname' => 'A',
                'subjectname' => 'Agriculture',
            ),
            10 => 
            array (
                'routine_id' => 801,
                'class_id' => 8,
                'section_id' => 1,
                'teacher_id' => '20-8101-03',
                'startingtime' => '11:00:00',
                'endingtime' => '12:00:00',
                'day' => 'Monday',
                'subject_id' => 81,
                'teachername' => 'Mr. Teacher Bangla',
                'sectionname' => 'A',
                'subjectname' => 'Bangla',
            ),
            11 => 
            array (
                'routine_id' => 802,
                'class_id' => 8,
                'section_id' => 1,
                'teacher_id' => '20-8102-03',
                'startingtime' => '13:00:00',
                'endingtime' => '14:00:00',
                'day' => 'Monday',
                'subject_id' => 82,
                'teachername' => 'Mr. Teacher English',
                'sectionname' => 'A',
                'subjectname' => 'English',
            ),
            12 => 
            array (
                'routine_id' => 803,
                'class_id' => 8,
                'section_id' => 1,
                'teacher_id' => '20-8103-03',
                'startingtime' => '09:00:00',
                'endingtime' => '10:00:00',
                'day' => 'Tuesday',
                'subject_id' => 83,
                'teachername' => 'Mr. Teacher Math',
                'sectionname' => 'A',
                'subjectname' => 'Math',
            ),
            13 => 
            array (
                'routine_id' => 804,
                'class_id' => 8,
                'section_id' => 1,
                'teacher_id' => '20-8104-03',
                'startingtime' => '10:00:00',
                'endingtime' => '11:00:00',
                'day' => 'Tuesday',
                'subject_id' => 84,
                'teachername' => 'Mr. Teacher Science',
                'sectionname' => 'A',
                'subjectname' => 'Science',
            ),
            14 => 
            array (
                'routine_id' => 805,
                'class_id' => 8,
                'section_id' => 1,
                'teacher_id' => '20-8105-03',
                'startingtime' => '11:00:00',
                'endingtime' => '12:00:00',
                'day' => 'Tuesday',
                'subject_id' => 85,
                'teachername' => 'Mr. Teacher Sociology',
                'sectionname' => 'A',
                'subjectname' => 'Sociology',
            ),
            15 => 
            array (
                'routine_id' => 806,
                'class_id' => 8,
                'section_id' => 1,
                'teacher_id' => '20-8106-03',
                'startingtime' => '13:00:00',
                'endingtime' => '14:00:00',
                'day' => 'Tuesday',
                'subject_id' => 86,
                'teachername' => 'Mr. Teacher Religion',
                'sectionname' => 'A',
                'subjectname' => 'Religion',
            ),
            16 => 
            array (
                'routine_id' => 807,
                'class_id' => 8,
                'section_id' => 1,
                'teacher_id' => '20-8107-03',
                'startingtime' => '09:00:00',
                'endingtime' => '10:00:00',
                'day' => 'Wednessday',
                'subject_id' => 87,
                'teachername' => 'Mr. Teacher ICT',
                'sectionname' => 'A',
                'subjectname' => 'ICT',
            ),
            17 => 
            array (
                'routine_id' => 808,
                'class_id' => 8,
                'section_id' => 1,
                'teacher_id' => '20-8108-03',
                'startingtime' => '10:00:00',
                'endingtime' => '11:00:00',
                'day' => 'Wednessday',
                'subject_id' => 88,
                'teachername' => 'Mr. Teacher World Knowledge',
                'sectionname' => 'A',
                'subjectname' => 'World Knowledge',
            ),
            18 => 
            array (
                'routine_id' => 809,
                'class_id' => 8,
                'section_id' => 1,
                'teacher_id' => '20-8109-03',
                'startingtime' => '11:00:00',
                'endingtime' => '12:00:00',
                'day' => 'Wednessday',
                'subject_id' => 89,
                'teachername' => 'Mr. Teacher Home Economics',
                'sectionname' => 'A',
                'subjectname' => 'Home Economics',
            ),
            19 => 
            array (
                'routine_id' => 800,
                'class_id' => 8,
                'section_id' => 1,
                'teacher_id' => '20-8100-03',
                'startingtime' => '13:00:00',
                'endingtime' => '14:00:00',
                'day' => 'Wednessday',
                'subject_id' => 80,
                'teachername' => 'Mr. Teacher Agriculture',
                'sectionname' => 'A',
                'subjectname' => 'Agriculture',
            ),
            20 => 
            array (
                'routine_id' => 801,
                'class_id' => 8,
                'section_id' => 1,
                'teacher_id' => '20-8101-03',
                'startingtime' => '09:00:00',
                'endingtime' => '10:00:00',
                'day' => 'Thursday',
                'subject_id' => 81,
                'teachername' => 'Mr. Teacher Bangla',
                'sectionname' => 'A',
                'subjectname' => 'Bangla',
            ),
            21 => 
            array (
                'routine_id' => 802,
                'class_id' => 8,
                'section_id' => 1,
                'teacher_id' => '20-8102-03',
                'startingtime' => '10:00:00',
                'endingtime' => '11:00:00',
                'day' => 'Thursday',
                'subject_id' => 82,
                'teachername' => 'Mr. Teacher English',
                'sectionname' => 'A',
                'subjectname' => 'English',
            ),
            22 => 
            array (
                'routine_id' => 803,
                'class_id' => 8,
                'section_id' => 1,
                'teacher_id' => '20-8103-03',
                'startingtime' => '11:00:00',
                'endingtime' => '12:00:00',
                'day' => 'Thursday',
                'subject_id' => 83,
                'teachername' => 'Mr. Teacher Math',
                'sectionname' => 'A',
                'subjectname' => 'Math',
            ),
            23 => 
            array (
                'routine_id' => 804,
                'class_id' => 8,
                'section_id' => 1,
                'teacher_id' => '20-8104-03',
                'startingtime' => '13:00:00',
                'endingtime' => '14:00:00',
                'day' => 'Thursday',
                'subject_id' => 84,
                'teachername' => 'Mr. Teacher Science',
                'sectionname' => 'A',
                'subjectname' => 'Science',
            ),
        ));
        
        
    }
}