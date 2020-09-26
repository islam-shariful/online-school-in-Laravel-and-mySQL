<?php

use Illuminate\Database\Seeder;

class UploadTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('upload')->delete();
        
        \DB::table('upload')->insert(array (
            0 => 
            array (
                'upload_id' => 1,
                'assignment_id' => 8002,
                'uploadfilename' => '2dfe9cc400d3d74b6ca254230b9d71af.png',
                'uploaddate' => '2020-08-18 20:48:45',
                'student_id' => '20-8101-04',
            ),
            1 => 
            array (
                'upload_id' => 2,
                'assignment_id' => 8001,
                'uploadfilename' => '1783da03d8e21ca6ebc26b42a7450f4c.jpg',
                'uploaddate' => '2020-08-19 02:02:09',
                'student_id' => '20-8101-04',
            ),
            2 => 
            array (
                'upload_id' => 20,
                'assignment_id' => 8001,
                'uploadfilename' => 'Laravel-DBRunning-Raw-SQL-Queries.txt',
                'uploaddate' => '2020-09-16',
                'student_id' => '20-8101-04',
            ),
            3 => 
            array (
                'upload_id' => 21,
                'assignment_id' => 8001,
                'uploadfilename' => 'Laravel-DBRunning-Raw-SQL-Queries.txt',
                'uploaddate' => '2020-09-20',
                'student_id' => '20-8101-04',
            ),
        ));
        
        
    }
}