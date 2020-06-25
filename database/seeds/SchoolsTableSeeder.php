<?php

use Illuminate\Database\Seeder;

class SchoolsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('schools')->delete();
        
        \DB::table('schools')->insert(array (
            0 => 
            array (
                'id' => 1,
                'picture' => 'http://therobotcenterapp.com/logos/SchoolDefault.png',
            'name' => 'Liceo Mexicano Canadiense (LIMECA)',
                'address' => 'Blvd. Diamante 51, Col. Valle Diamante, Corregidora, Qro',
            'phone' => '(442) 254 9090 / (442) 254 9091',
                'created_at' => '2019-06-26 23:34:39',
                'updated_at' => '2019-08-01 16:21:13',
            ),
            1 => 
            array (
                'id' => 2,
                'picture' => 'http://therobotcenterapp.com/logos/SchoolDefault.png',
                'name' => 'Colegio Viktor Frankl',
                'address' => 'Parcela 152 Z 1 P 6/6, El Pueblito, 76090 Qro',
            'phone' => '(442) 238 6000',
                'created_at' => '2019-07-12 13:18:54',
                'updated_at' => '2019-08-01 16:21:28',
            ),
            2 => 
            array (
                'id' => 3,
                'picture' => 'http://therobotcenterapp.com/logos/SchoolDefault.png',
                'name' => 'Colegio Nuevo Continente Zaragoza',
                'address' => 'Prol. Av. Zaragoza 61, Prados de La Capilla, 76176 Santiago de Querétaro, Qro.',
            'phone' => '(442) 216 7164',
                'created_at' => '2019-07-12 13:19:43',
                'updated_at' => '2019-08-01 16:21:40',
            ),
            3 => 
            array (
                'id' => 4,
                'picture' => 'http://therobotcenterapp.com/logos/SchoolDefault.png',
                'name' => 'Colegio Monte Alban',
                'address' => 'Queretaro Num. 23 Poniente, San Jose De Los Olvera, 76090 Corregidora, Qro.',
            'phone' => '(442) 238 6000',
                'created_at' => '2019-07-12 13:20:27',
                'updated_at' => '2019-08-01 16:21:55',
            ),
            4 => 
            array (
                'id' => 5,
                'picture' => 'http://therobotcenterapp.com/logos/SchoolDefault.png',
                'name' => 'Instituto Franco Queretano',
                'address' => 'Hacienda del Conejo, Hacienda El Conejo 110, El Jacal, 76178 Santiago de Querétaro, Qro.',
            'phone' => '(442) 295 6699',
                'created_at' => '2019-07-12 13:21:15',
                'updated_at' => '2019-08-01 16:22:14',
            ),
            5 => 
            array (
                'id' => 6,
                'picture' => 'http://therobotcenterapp.com/logos/SchoolDefault.png',
                'name' => 'Colegio Lenox',
                'address' => 'Anillo Vial II Fray Junípero Serra # 11850, El Refugio, 76140',
            'phone' => '(442) 2411500',
                'created_at' => '2019-07-31 20:10:21',
                'updated_at' => '2019-07-31 20:10:21',
            ),
            6 => 
            array (
                'id' => 7,
                'picture' => 'http://therobotcenterapp.com/logos/SchoolDefault.png',
                'name' => 'Colegio Austriaco',
            'address' => 'Libramiento Sur Poniente KM 26.5, CP. 76230, (Frente a Huertas la Joya) Tlacote, Qro',
            'phone' => '(442) 235 0103',
                'created_at' => '2019-08-01 15:42:03',
                'updated_at' => '2019-08-01 15:42:03',
            ),
            7 => 
            array (
                'id' => 8,
                'picture' => 'http://therobotcenterapp.com/logos/SchoolDefault.png',
                'name' => 'Colegio Nuevo Continente Juriquilla',
                'address' => 'Anillo Vial Fray Junipero Serra 102, Santiago de Querétaro, Qro.',
            'phone' => '(442) 290 6165 / (442) 176 8113 / (442) 569 3338',
                'created_at' => '2019-08-01 15:44:38',
                'updated_at' => '2019-08-01 15:44:38',
            ),
            8 => 
            array (
                'id' => 9,
                'picture' => 'http://therobotcenterapp.com/logos/SchoolDefault.png',
                'name' => 'Colegio Marcelina',
                'address' => 'Níspero # 101, Col. Arboledas, CP. 76140, Querétaro, Qro.',
            'phone' => '(442) 212 9098',
                'created_at' => '2019-08-01 15:58:27',
                'updated_at' => '2019-08-01 15:58:27',
            ),
            9 => 
            array (
                'id' => 10,
                'picture' => 'http://therobotcenterapp.com/logos/SchoolDefault.png',
                'name' => 'Colegio Saint Agustine',
                'address' => 'Camelinas # 150, Col. Jurica, CP.',
            'phone' => '(442) 218 9259',
                'created_at' => '2019-08-01 16:08:01',
                'updated_at' => '2019-08-01 16:08:01',
            ),
            10 => 
            array (
                'id' => 11,
                'picture' => 'http://therobotcenterapp.com/logos/SchoolDefault.png',
                'name' => 'Colegio del Olmo',
                'address' => 'Av. Luis Vega Monrroy Num. 432, Colinas del Cimatario, 76090 Santiago de Querétaro, Qro.',
            'phone' => '(442) 223 5331',
                'created_at' => '2019-08-01 16:19:27',
                'updated_at' => '2019-08-01 16:19:27',
            ),
            11 => 
            array (
                'id' => 12,
                'picture' => 'http://therobotcenterapp.com/logos/SchoolDefault.png',
                'name' => 'Puerto Alto',
                'address' => 'Anillo Vial Fray Junipero Serra, CP. 76146, Santiago de Querétaro, Qro.',
            'phone' => '(442) 3927354',
                'created_at' => '2019-08-01 16:26:15',
                'updated_at' => '2019-08-01 16:26:15',
            ),
            12 => 
            array (
                'id' => 13,
                'picture' => 'http://therobotcenterapp.com/logos/SchoolDefault.png',
                'name' => 'Colegio Evergreen',
                'address' => 'REESCOLAR Y PRIMARIA:. Paseo de la Constitución 412, San Pedrito Peñuelas. CP 76148. Querétaro, Qro. / SECUNDARIA:  Blvd. De la Nación 180, Desarrollo Centro Norte. CP 76148. Querétaro, Qro.',
            'phone' => 'Primaria:  (442) 245 2859 / Secundaria: Tel. (442) 261 0001.',
                'created_at' => '2019-08-01 16:30:43',
                'updated_at' => '2019-08-01 16:30:43',
            ),
            13 => 
            array (
                'id' => 14,
                'picture' => 'http://therobotcenterapp.com/logos/SchoolDefault.png',
                'name' => 'Colegio Greenhills',
                'address' => 'Privada Gallegos Num. 2, El Pueblito, 76090 Corregidora, Qro',
            'phone' => '(442) 238 6000',
                'created_at' => '2019-08-01 16:33:56',
                'updated_at' => '2019-08-01 16:33:56',
            ),
            14 => 
            array (
                'id' => 15,
                'picture' => 'http://therobotcenterapp.com/logos/SchoolDefault.png',
                'name' => 'John F. Kennedy School',
                'address' => 'Sabinos 272, Jurica, 76100 Santiago de Querétaro, Qro.',
            'phone' => '(442) 218 0075',
                'created_at' => '2019-08-02 20:11:06',
                'updated_at' => '2019-08-02 20:11:06',
            ),
            15 => 
            array (
                'id' => 21,
                'picture' => 'http://therobotcenterapp.com/logos/SchoolDefault.png',
                'name' => '23',
                'address' => 'Actualice los datos...',
                'phone' => '',
                'created_at' => '2019-08-22 17:11:35',
                'updated_at' => '2019-08-22 17:11:35',
            ),
            16 => 
            array (
                'id' => 22,
                'picture' => 'http://therobotcenterapp.com/logos/SchoolDefault.png',
                'name' => '24',
                'address' => 'Actualice los datos...',
                'phone' => '',
                'created_at' => '2019-08-22 17:17:01',
                'updated_at' => '2019-08-22 17:17:01',
            ),
            17 => 
            array (
                'id' => 40,
                'picture' => 'http://therobotcenterapp.com/logos/SchoolDefault.png',
                'name' => 'VIKTOR FRANKL',
                'address' => 'Actualice los datos...',
                'phone' => '',
                'created_at' => '2019-09-02 20:08:11',
                'updated_at' => '2019-09-02 20:08:11',
            ),
            18 => 
            array (
                'id' => 74,
                'picture' => NULL,
            'name' => 'LICEO MEXICANO CANADIENCE (LIMECA)',
                'address' => 'Actualice los datos...',
                'phone' => '',
                'created_at' => '2019-11-26 11:53:05',
                'updated_at' => '2019-11-26 11:53:05',
            ),
            19 => 
            array (
                'id' => 75,
                'picture' => NULL,
                'name' => 'NUEVO CONTINENTE ZARAGOZA',
                'address' => 'Actualice los datos...',
                'phone' => '',
                'created_at' => '2019-11-26 12:25:50',
                'updated_at' => '2019-11-26 12:25:50',
            ),
            20 => 
            array (
                'id' => 76,
                'picture' => NULL,
                'name' => 'CECEQ - Centro Educativo Cultural del Estado de Querétaro.',
                'address' => 'Av. Constituyentes S/N, Villas del Sur, 76000 Santiago de Querétaro, Qro.',
                'phone' => '442-251-96-00',
                'created_at' => '2019-12-09 09:54:44',
                'updated_at' => '2019-12-09 09:54:44',
            ),
            21 => 
            array (
                'id' => 77,
                'picture' => NULL,
                'name' => 'THE ROBOT CENTER',
                'address' => 'Rufino Tamayo 45, Nuevo, 76900 El Pueblito, Qro.',
                'phone' => '442-46-27-319',
                'created_at' => '2019-12-09 10:07:20',
                'updated_at' => '2019-12-09 11:03:17',
            ),
            22 => 
            array (
                'id' => 78,
                'picture' => NULL,
                'name' => 'Centro cultural Manuel Gomez Morin',
                'address' => 'Actualice los datos...',
                'phone' => '',
                'created_at' => '2019-12-10 09:37:37',
                'updated_at' => '2019-12-10 09:37:37',
            ),
            23 => 
            array (
                'id' => 79,
                'picture' => NULL,
                'name' => 'Colegio',
                'address' => 'Actualice los datos...',
                'phone' => '',
                'created_at' => '2019-12-11 08:05:45',
                'updated_at' => '2019-12-11 08:05:45',
            ),
            24 => 
            array (
                'id' => 80,
                'picture' => NULL,
                'name' => 'Lenox',
                'address' => 'Actualice los datos...',
                'phone' => '',
                'created_at' => '2019-12-12 10:23:18',
                'updated_at' => '2019-12-12 10:23:18',
            ),
            25 => 
            array (
                'id' => 83,
                'picture' => NULL,
                'name' => 'LICEO MEXICANO CANADIENCE',
                'address' => 'Actualice los datos...',
                'phone' => '',
                'created_at' => '2019-12-18 17:21:15',
                'updated_at' => '2019-12-18 17:21:15',
            ),
            26 => 
            array (
                'id' => 86,
                'picture' => NULL,
                'name' => 'John F. Kennedy',
                'address' => 'Actualice los datos...',
                'phone' => '',
                'created_at' => '2019-12-18 17:37:25',
                'updated_at' => '2019-12-18 17:37:25',
            ),
            27 => 
            array (
                'id' => 87,
                'picture' => NULL,
                'name' => 'Instituto Franco de Querétaro',
                'address' => 'Actualice los datos...',
                'phone' => '',
                'created_at' => '2019-12-18 21:16:51',
                'updated_at' => '2019-12-18 21:16:51',
            ),
            28 => 
            array (
                'id' => 88,
                'picture' => NULL,
                'name' => 'Monte Alban ',
                'address' => 'Actualice los datos...',
                'phone' => '',
                'created_at' => '2019-12-18 21:25:40',
                'updated_at' => '2019-12-18 21:25:40',
            ),
            29 => 
            array (
                'id' => 89,
                'picture' => NULL,
                'name' => 'CECEQ - Centro Educativo Cultural del Estado de Querétaro',
                'address' => 'Actualice los datos...',
                'phone' => '',
                'created_at' => '2019-12-19 10:37:47',
                'updated_at' => '2019-12-19 10:37:47',
            ),
        ));
        
        
    }
}