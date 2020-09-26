<?php

use Illuminate\Database\Seeder;

class SuperadminTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('superadmin')->delete();
        
        \DB::table('superadmin')->insert(array (
            0 => 
            array (
                'id' => 1,
                'superadmin_id' => '20-0000-01',
                'superadminname' => 'raiyanislam',
                'superadminemail' => 'raiyan@gmail.com',
            ),
        ));
        
        
    }
}