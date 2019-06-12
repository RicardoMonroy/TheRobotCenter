<?php

use Illuminate\Database\Seeder;
use App\Level;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Level::create([
            'name'          => 'Primaria Baja',
            'description'   => '',
        ]);

        Level::create([
            'name'          => 'Primaria Alta',
            'description'   => '',
        ]);

        Level::create([
            'name'          => 'Secuandar Baja',
            'description'   => '',
        ]);

        Level::create([
            'name'          => 'Secundaria Alta',
            'description'   => '',
        ]);

        Level::create([
            'name'          => 'Preparatoria',
            'description'   => '',
        ]);
    }
}