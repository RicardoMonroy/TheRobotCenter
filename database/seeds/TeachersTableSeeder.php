<?php

use Illuminate\Database\Seeder;

class TeachersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('teachers')->delete();
        
        \DB::table('teachers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Maestro',
                'biography' => NULL,
                'website_url' => NULL,
                'user_id' => 18,
                'created_at' => '2019-08-12 19:26:41',
                'updated_at' => '2019-08-12 19:26:41',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Ing.',
                'biography' => NULL,
                'website_url' => NULL,
                'user_id' => 1,
                'created_at' => '2019-08-20 19:45:00',
                'updated_at' => '2019-08-20 19:45:00',
            ),
        ));
        
        
    }
}