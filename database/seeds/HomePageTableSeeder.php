<?php

use Illuminate\Database\Seeder;
use App\Page;

class HomePageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::create([
            'firstTitle'    => 'Conoce nuestro',
            'firstCopy'     => 'Curso de Primavera',
            'firstText'     => 'Que mejor forma de disfrutar las vacaciones que divirtiendo y aprendiendo con la mejor tecnología de LEGO ® Education en Robot Center',
            'secondTitle'   => 'Ven y conoce nuestros',
            'secondCopy'    => 'Talleres Extra Escolares',
            'secondText'    => 'Permite que tu hijo desarrolle nuevas capacidades y multiplique los talentos que tiene a través de nuestras clases que ayudarán en su aprendizaje.',
        ]);
    }
}
