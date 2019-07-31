<?php

use Illuminate\Database\Seeder;
use App\School;

class SchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        School::create([
            'picture' => NULL,
            'name' => 'Liceo Mexicano Canadiense (LIMECA)',
            'address' => 'Blvd. Diamante 51, Col. Valle Diamante, Corregidora, Qro',
            'phone' => '4422549091',
        ]);
        School::create([
            'picture' => NULL,
            'name' => 'Colegio Viktor Frankl Secundaria',
            'address' => 'Parcela 152 Z 1 P 6/6, El Pueblito, 76090 Qro',
            'phone' => '01 442 238 6000',
        ]);
        School::create([
            'picture' => NULL,
            'name' => 'Colegio Nuevo Continente',
            'address' => 'Prol. Av. Zaragoza 61, Prados de La Capilla, 76176 Santiago de Querétaro, Qro.',
            'phone' => '01 442 216 7164',
        ]);
        School::create([
            'picture' => NULL,
            'name' => 'Colegio Monte Alban Primaria',
            'address' => 'Queretaro Num. 23 Poniente, San Jose De Los Olvera, 76090 Corregidora, Qro.',
            'phone' => '01 442 238 6000',
        ]);
        School::create([
            'picture' => NULL,
            'name' => 'Instituto Franco Queretano Primaria',
            'address' => 'Hacienda del Conejo, Hacienda El Conejo 110, El Jacal, 76178 Santiago de Querétaro, Qro.',
            'phone' => '01 442 295 6699',
        ]);

    }
}