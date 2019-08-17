<?php

use Illuminate\Database\Seeder;
use App\Material;

class MaterialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Material::create([
            'name'          => 'Robot EV3',
            'description'   => NULL,
            'picture'       => NULL,
        ]);
        Material::create([
            'name'          => 'Robot Wedo 1.0',
            'description'   => NULL,
            'picture'       => NULL,
        ]);
        Material::create([
            'name'          => 'Robot Wedo 2.0',
            'description'   => NULL,
            'picture'       => NULL,
        ]);
    }
}
