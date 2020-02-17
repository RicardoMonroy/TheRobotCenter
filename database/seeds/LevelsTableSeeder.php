<?php

use Illuminate\Database\Seeder;

class LevelsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('levels')->delete();
        
        \DB::table('levels')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Primaria Baja',
                'description' => '',
                'created_at' => '2019-06-26 23:34:38',
                'updated_at' => '2019-06-26 23:34:38',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Primaria Alta',
                'description' => '',
                'created_at' => '2019-06-26 23:34:38',
                'updated_at' => '2019-06-26 23:34:38',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Secundaria',
                'description' => 'En horario matutino, como materia.',
                'created_at' => '2019-06-26 23:34:38',
                'updated_at' => '2019-08-01 17:24:45',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'Preparatoria',
                'description' => '',
                'created_at' => '2019-06-26 23:34:38',
                'updated_at' => '2019-06-26 23:34:38',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => '1o Secundaria',
                'description' => NULL,
                'created_at' => '2019-07-29 17:57:13',
                'updated_at' => '2019-07-29 17:57:13',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'Talleres Extraescolares Primaria Baja',
                'description' => 'Para niños entre 1o a 3o de primaria.
Materiales LEGO Education
Principios de mecánica sets 9689
Introducción a la programación con sets 9580, 9585, y 45300',
                'created_at' => '2019-08-01 17:19:32',
                'updated_at' => '2019-08-01 17:19:32',
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'Talleres Extraescolares Primaria Alta',
                'description' => 'Para grupos de 4o a 6o grado
Materiales: LEGO Education
Mecánica: Sets de trabajo 9686 (azul) y 2009641 (rojo)
Robótica: Mindstorms EV3 y Spike',
                'created_at' => '2019-08-01 17:23:06',
                'updated_at' => '2019-08-01 17:23:06',
            ),
            7 => 
            array (
                'id' => 9,
                'name' => 'Talleres Extraescolares Secundaria',
                'description' => 'Grupos de 1o a 3o de primaria.
Materiales: LEGO Education
Sets 9686, 9641 y 9688
Programación con 45544',
                'created_at' => '2019-08-01 17:35:48',
                'updated_at' => '2019-08-01 17:35:48',
            ),
            8 => 
            array (
                'id' => 10,
                'name' => 'Preescolar',
                'description' => NULL,
                'created_at' => '2019-12-17 16:19:31',
                'updated_at' => '2019-12-17 16:23:01',
            ),
            9 => 
            array (
                'id' => 11,
                'name' => 'Talleres Extraescolares Preescolar',
                'description' => NULL,
                'created_at' => '2019-12-17 16:21:04',
                'updated_at' => '2019-12-17 16:22:22',
            ),
        ));
        
        
    }
}