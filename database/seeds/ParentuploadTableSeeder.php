<?php

use Illuminate\Database\Seeder;

class ParentuploadTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('parentupload')->delete();
        
        \DB::table('parentupload')->insert(array (
            0 => 
            array (
                'parentupload_id' => 1,
                'teacher_id' => '20-8101-03',
                'uploadfiledirectory' => 'Laravel-DBORM.txt',
                'parentuploaddate' => '2020-09-20',
                'student_id' => '20-8101-04',
            ),
            1 => 
            array (
                'parentupload_id' => 2,
                'teacher_id' => '20-8101-03',
                'uploadfiledirectory' => 'Laravel-DBRunning-Raw-SQL-Queries.txt',
                'parentuploaddate' => '2020-09-20',
                'student_id' => '20-8101-04',
            ),
            2 => 
            array (
                'parentupload_id' => 3,
                'teacher_id' => '20-8102-03',
            'uploadfiledirectory' => 'Abominable (2019) 1080p BluRay _ Circle Network.mp4_snapshot_00.00.45.462.jpg',
                'parentuploaddate' => '2020-09-20',
                'student_id' => '20-8101-04',
            ),
            3 => 
            array (
                'parentupload_id' => 4,
                'teacher_id' => '20-8105-03',
            'uploadfiledirectory' => 'Abominable (2019) 1080p BluRay _ Circle Network.mp4_snapshot_00.34.02.428.jpg',
                'parentuploaddate' => '2020-09-20',
                'student_id' => '20-8101-04',
            ),
        ));
        
        
    }
}