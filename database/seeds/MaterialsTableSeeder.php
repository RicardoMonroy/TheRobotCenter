<?php

use Illuminate\Database\Seeder;

class MaterialsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('materials')->delete();
        
        \DB::table('materials')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Robot EV3',
                'description' => NULL,
                'picture' => NULL,
                'created_at' => '2019-08-17 18:52:05',
                'updated_at' => '2019-08-17 18:52:05',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Robot Wedo 1.0',
                'description' => NULL,
                'picture' => NULL,
                'created_at' => '2019-08-17 18:52:05',
                'updated_at' => '2019-08-17 18:52:05',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Robot Wedo 2.0',
                'description' => NULL,
                'picture' => NULL,
                'created_at' => '2019-08-17 18:52:05',
                'updated_at' => '2019-08-17 18:52:05',
            ),
        ));
        
        
    }
}