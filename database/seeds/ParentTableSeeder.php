<?php

use Illuminate\Database\Seeder;

class ParentTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('parent')->delete();
        
        \DB::table('parent')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => '20-8101-05',
                'student_id' => '20-8101-04',
                'parentname' => 'Mr. Rahman',
                'parentemail' => 'MrRahman@gmail.com',
                'parentphone' => 1414412345,
                'parentrelation' => 'Father',
            ),
        ));
        
        
    }
}