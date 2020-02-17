<?php

use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('groups')->delete();
        
        \DB::table('groups')->insert(array (
            0 => 
            array (
                'id' => 12,
                'name' => '4o. primaria - Linces',
                'level_id' => 2,
                'school_id' => 1,
                'teacher_id' => NULL,
                'created_at' => '2019-08-01 17:02:57',
                'updated_at' => '2019-08-01 17:02:57',
            ),
            1 => 
            array (
                'id' => 13,
                'name' => '5o. primaria - Águilas',
                'level_id' => 2,
                'school_id' => 1,
                'teacher_id' => NULL,
                'created_at' => '2019-08-01 17:04:17',
                'updated_at' => '2019-08-01 17:04:56',
            ),
            2 => 
            array (
                'id' => 15,
                'name' => '5o. primaria - Lobos',
                'level_id' => 2,
                'school_id' => 1,
                'teacher_id' => NULL,
                'created_at' => '2019-08-01 17:12:51',
                'updated_at' => '2019-08-01 17:12:51',
            ),
            3 => 
            array (
                'id' => 16,
                'name' => '6o. primaria - Águilas',
                'level_id' => 2,
                'school_id' => 1,
                'teacher_id' => NULL,
                'created_at' => '2019-08-01 17:13:21',
                'updated_at' => '2019-08-01 17:16:08',
            ),
            4 => 
            array (
                'id' => 19,
                'name' => '6o. primaria - Lobos',
                'level_id' => 2,
                'school_id' => 1,
                'teacher_id' => NULL,
                'created_at' => '2019-08-01 17:17:01',
                'updated_at' => '2019-08-01 17:17:01',
            ),
            5 => 
            array (
                'id' => 20,
                'name' => 'Talleres Extraescolares Primaria Baja',
                'level_id' => 7,
                'school_id' => 13,
                'teacher_id' => NULL,
                'created_at' => '2019-08-01 17:20:13',
                'updated_at' => '2019-12-12 10:34:52',
            ),
            6 => 
            array (
                'id' => 24,
                'name' => 'E1 VERDE',
                'level_id' => 1,
                'school_id' => 1,
                'teacher_id' => NULL,
                'created_at' => '2019-08-12 19:33:37',
                'updated_at' => '2019-09-03 16:04:24',
            ),
            7 => 
            array (
                'id' => 25,
                'name' => '2o Primaria Verde',
                'level_id' => 1,
                'school_id' => 1,
                'teacher_id' => NULL,
                'created_at' => '2019-08-12 19:34:23',
                'updated_at' => '2019-08-16 20:14:24',
            ),
            8 => 
            array (
                'id' => 26,
                'name' => 'E2 AZUL',
                'level_id' => 1,
                'school_id' => 6,
                'teacher_id' => NULL,
                'created_at' => '2019-08-12 19:36:03',
                'updated_at' => '2019-10-18 12:02:27',
            ),
            9 => 
            array (
                'id' => 27,
                'name' => 'E3 AZUL',
                'level_id' => 1,
                'school_id' => 6,
                'teacher_id' => NULL,
                'created_at' => '2019-08-12 19:36:53',
                'updated_at' => '2019-08-19 23:45:40',
            ),
            10 => 
            array (
                'id' => 28,
                'name' => 'E3 VERDE',
                'level_id' => 2,
                'school_id' => 6,
                'teacher_id' => NULL,
                'created_at' => '2019-08-12 19:37:31',
                'updated_at' => '2019-08-19 23:47:44',
            ),
            11 => 
            array (
                'id' => 30,
                'name' => 'E4 VERDE',
                'level_id' => 2,
                'school_id' => 6,
                'teacher_id' => NULL,
                'created_at' => '2019-08-12 19:39:10',
                'updated_at' => '2019-08-19 23:49:24',
            ),
            12 => 
            array (
                'id' => 31,
                'name' => 'E5 AZUL',
                'level_id' => 2,
                'school_id' => 6,
                'teacher_id' => NULL,
                'created_at' => '2019-08-12 19:39:53',
                'updated_at' => '2019-08-19 23:51:14',
            ),
            13 => 
            array (
                'id' => 32,
                'name' => 'E5 VERDE',
                'level_id' => 2,
                'school_id' => 6,
                'teacher_id' => NULL,
                'created_at' => '2019-08-12 19:40:47',
                'updated_at' => '2019-08-19 23:52:40',
            ),
            14 => 
            array (
                'id' => 33,
                'name' => 'E6 AZUL',
                'level_id' => 2,
                'school_id' => 6,
                'teacher_id' => NULL,
                'created_at' => '2019-08-12 19:41:19',
                'updated_at' => '2019-08-19 23:54:22',
            ),
            15 => 
            array (
                'id' => 34,
                'name' => 'E6 VERDE',
                'level_id' => 2,
                'school_id' => 6,
                'teacher_id' => NULL,
                'created_at' => '2019-08-12 19:41:58',
                'updated_at' => '2019-08-19 23:55:27',
            ),
            16 => 
            array (
                'id' => 45,
                'name' => 'E1 AZUL',
                'level_id' => 1,
                'school_id' => 1,
                'teacher_id' => NULL,
                'created_at' => '2019-08-16 20:56:24',
                'updated_at' => '2019-09-03 16:06:32',
            ),
            17 => 
            array (
                'id' => 48,
                'name' => 'E4 AZUL',
                'level_id' => 2,
                'school_id' => 6,
                'teacher_id' => NULL,
                'created_at' => '2019-08-19 20:50:55',
                'updated_at' => '2019-08-19 23:48:25',
            ),
            18 => 
            array (
                'id' => 51,
                'name' => '22',
                'level_id' => 4,
                'school_id' => 1,
                'teacher_id' => NULL,
                'created_at' => '2019-08-22 16:44:09',
                'updated_at' => '2019-12-03 07:29:51',
            ),
            19 => 
            array (
                'id' => 56,
                'name' => '23',
                'level_id' => 4,
                'school_id' => 3,
                'teacher_id' => NULL,
                'created_at' => '2019-08-22 17:11:35',
                'updated_at' => '2019-10-04 11:45:38',
            ),
            20 => 
            array (
                'id' => 57,
                'name' => '24',
                'level_id' => 4,
                'school_id' => 3,
                'teacher_id' => NULL,
                'created_at' => '2019-08-22 17:17:01',
                'updated_at' => '2019-11-26 11:04:54',
            ),
            21 => 
            array (
                'id' => 60,
                'name' => '3o Secundaria Castaño',
                'level_id' => 4,
                'school_id' => 13,
                'teacher_id' => NULL,
                'created_at' => '2019-08-26 13:49:00',
                'updated_at' => '2019-10-07 09:43:47',
            ),
            22 => 
            array (
                'id' => 61,
                'name' => '3o Secundaria Cedro',
                'level_id' => 4,
                'school_id' => 13,
                'teacher_id' => NULL,
                'created_at' => '2019-08-26 14:47:09',
                'updated_at' => '2019-10-09 06:30:44',
            ),
            23 => 
            array (
                'id' => 62,
                'name' => '4o Secundaria Cedro',
                'level_id' => NULL,
                'school_id' => 1,
                'teacher_id' => NULL,
                'created_at' => '2019-08-26 14:48:03',
                'updated_at' => '2019-09-19 09:58:42',
            ),
            24 => 
            array (
                'id' => 63,
                'name' => '3o Secundaria Laurel',
                'level_id' => 4,
                'school_id' => 1,
                'teacher_id' => NULL,
                'created_at' => '2019-08-26 15:38:33',
                'updated_at' => '2019-10-03 10:07:37',
            ),
            25 => 
            array (
                'id' => 64,
                'name' => '3o Secundaria Pino',
                'level_id' => 4,
                'school_id' => 13,
                'teacher_id' => NULL,
                'created_at' => '2019-08-26 18:32:39',
                'updated_at' => '2019-10-10 07:39:47',
            ),
            26 => 
            array (
                'id' => 82,
                'name' => '8° A',
                'level_id' => 4,
                'school_id' => 1,
                'teacher_id' => NULL,
                'created_at' => '2019-09-02 20:08:11',
                'updated_at' => '2019-09-09 08:05:12',
            ),
            27 => 
            array (
                'id' => 83,
                'name' => '8° B',
                'level_id' => 4,
                'school_id' => 2,
                'teacher_id' => NULL,
                'created_at' => '2019-09-02 20:28:21',
                'updated_at' => '2019-09-09 08:05:52',
            ),
            28 => 
            array (
                'id' => 84,
                'name' => '8° C',
                'level_id' => 4,
                'school_id' => 2,
                'teacher_id' => NULL,
                'created_at' => '2019-09-02 20:51:24',
                'updated_at' => '2019-09-09 08:07:08',
            ),
            29 => 
            array (
                'id' => 97,
                'name' => '21',
                'level_id' => 4,
                'school_id' => 3,
                'teacher_id' => NULL,
                'created_at' => '2019-09-02 23:06:24',
                'updated_at' => '2019-11-26 11:08:32',
            ),
            30 => 
            array (
                'id' => 111,
                'name' => 'E1 AZUL',
                'level_id' => 1,
                'school_id' => 6,
                'teacher_id' => NULL,
                'created_at' => '2019-09-17 10:19:10',
                'updated_at' => '2019-10-04 10:18:51',
            ),
            31 => 
            array (
                'id' => 115,
                'name' => 'E1 VERDE',
                'level_id' => 1,
                'school_id' => 6,
                'teacher_id' => NULL,
                'created_at' => '2019-09-23 10:58:12',
                'updated_at' => '2019-10-04 10:27:31',
            ),
            32 => 
            array (
                'id' => 119,
                'name' => 'JH1 VERDE',
                'level_id' => NULL,
                'school_id' => 6,
                'teacher_id' => NULL,
                'created_at' => '2019-09-28 11:11:59',
                'updated_at' => '2019-09-28 11:11:59',
            ),
            33 => 
            array (
                'id' => 120,
                'name' => 'JH1 AZUL',
                'level_id' => NULL,
                'school_id' => 6,
                'teacher_id' => NULL,
                'created_at' => '2019-09-28 11:17:15',
                'updated_at' => '2019-11-11 09:35:52',
            ),
            34 => 
            array (
                'id' => 130,
                'name' => 'JH2 AZUL',
                'level_id' => NULL,
                'school_id' => 6,
                'teacher_id' => NULL,
                'created_at' => '2019-09-28 11:36:28',
                'updated_at' => '2019-10-18 12:07:21',
            ),
            35 => 
            array (
                'id' => 155,
                'name' => 'JH3 AZUL',
                'level_id' => NULL,
                'school_id' => 6,
                'teacher_id' => NULL,
                'created_at' => '2019-10-01 19:19:45',
                'updated_at' => '2019-10-21 09:21:05',
            ),
            36 => 
            array (
                'id' => 157,
                'name' => '1º Saint Augustine',
                'level_id' => 4,
                'school_id' => 10,
                'teacher_id' => NULL,
                'created_at' => '2019-10-04 11:50:41',
                'updated_at' => '2019-10-04 11:50:41',
            ),
            37 => 
            array (
                'id' => 162,
                'name' => 'E2 VERDE',
                'level_id' => NULL,
                'school_id' => 1,
                'teacher_id' => NULL,
                'created_at' => '2019-10-05 21:54:03',
                'updated_at' => '2019-11-11 09:48:25',
            ),
            38 => 
            array (
                'id' => 168,
                'name' => '1ro Secundaria Fresno',
                'level_id' => 4,
                'school_id' => 13,
                'teacher_id' => NULL,
                'created_at' => '2019-10-31 13:25:24',
                'updated_at' => '2019-10-31 13:25:24',
            ),
            39 => 
            array (
                'id' => 169,
                'name' => '1ro Secundaria Álamo',
                'level_id' => 4,
                'school_id' => 13,
                'teacher_id' => NULL,
                'created_at' => '2019-10-31 13:32:52',
                'updated_at' => '2019-10-31 13:32:52',
            ),
            40 => 
            array (
                'id' => 170,
                'name' => '1ro Secundaria Ficus',
                'level_id' => 4,
                'school_id' => 13,
                'teacher_id' => NULL,
                'created_at' => '2019-10-31 13:36:20',
                'updated_at' => '2019-10-31 13:36:20',
            ),
            41 => 
            array (
                'id' => 171,
                'name' => '1ro Secundaria Eucalipto',
                'level_id' => 4,
                'school_id' => 13,
                'teacher_id' => NULL,
                'created_at' => '2019-10-31 13:44:37',
                'updated_at' => '2019-10-31 13:44:37',
            ),
            42 => 
            array (
                'id' => 172,
                'name' => '1o Secundaria Fresno',
                'level_id' => NULL,
                'school_id' => 13,
                'teacher_id' => NULL,
                'created_at' => '2019-11-05 13:00:20',
                'updated_at' => '2019-11-05 13:00:20',
            ),
            43 => 
            array (
                'id' => 173,
                'name' => '1o Secundaria Álamo',
                'level_id' => NULL,
                'school_id' => 13,
                'teacher_id' => NULL,
                'created_at' => '2019-11-06 13:07:29',
                'updated_at' => '2019-11-06 13:07:29',
            ),
            44 => 
            array (
                'id' => 174,
                'name' => '1o Secundaria Eucalipto',
                'level_id' => NULL,
                'school_id' => 13,
                'teacher_id' => NULL,
                'created_at' => '2019-11-06 13:08:22',
                'updated_at' => '2019-11-06 13:08:22',
            ),
            45 => 
            array (
                'id' => 175,
                'name' => '1o Secundaria Ficus',
                'level_id' => NULL,
                'school_id' => 13,
                'teacher_id' => NULL,
                'created_at' => '2019-11-06 13:09:30',
                'updated_at' => '2019-11-06 13:09:30',
            ),
            46 => 
            array (
                'id' => 176,
                'name' => 'Marcelina - Primaria Baja',
                'level_id' => 7,
                'school_id' => 9,
                'teacher_id' => NULL,
                'created_at' => '2019-11-15 09:25:23',
                'updated_at' => '2019-12-18 21:06:12',
            ),
            47 => 
            array (
                'id' => 178,
                'name' => 'PRIMARIA BAJA EVERGREEN',
                'level_id' => 1,
                'school_id' => 13,
                'teacher_id' => NULL,
                'created_at' => '2019-11-20 10:05:36',
                'updated_at' => '2019-11-22 10:08:47',
            ),
            48 => 
            array (
                'id' => 182,
                'name' => 'Extra escolar primaria alta',
                'level_id' => 2,
                'school_id' => 1,
                'teacher_id' => NULL,
                'created_at' => '2019-11-26 09:34:25',
                'updated_at' => '2019-11-26 11:40:20',
            ),
            49 => 
            array (
                'id' => 183,
                'name' => 'EX.PB.001',
                'level_id' => NULL,
                'school_id' => 74,
                'teacher_id' => NULL,
                'created_at' => '2019-11-26 11:53:05',
                'updated_at' => '2019-11-26 11:53:05',
            ),
            50 => 
            array (
                'id' => 184,
                'name' => 'EX.PB.002',
                'level_id' => NULL,
                'school_id' => 74,
                'teacher_id' => NULL,
                'created_at' => '2019-11-26 11:53:05',
                'updated_at' => '2019-11-26 11:53:05',
            ),
            51 => 
            array (
                'id' => 185,
                'name' => 'EX.PB.003',
                'level_id' => NULL,
                'school_id' => 74,
                'teacher_id' => NULL,
                'created_at' => '2019-11-26 11:53:05',
                'updated_at' => '2019-11-26 11:53:05',
            ),
            52 => 
            array (
                'id' => 186,
                'name' => 'EX.PB.004',
                'level_id' => NULL,
                'school_id' => 74,
                'teacher_id' => NULL,
                'created_at' => '2019-11-26 11:53:05',
                'updated_at' => '2019-11-26 11:53:05',
            ),
            53 => 
            array (
                'id' => 187,
                'name' => 'EX.PB.005',
                'level_id' => NULL,
                'school_id' => 74,
                'teacher_id' => NULL,
                'created_at' => '2019-11-26 11:53:05',
                'updated_at' => '2019-11-26 11:53:05',
            ),
            54 => 
            array (
                'id' => 188,
                'name' => 'EX.PB.006',
                'level_id' => NULL,
                'school_id' => 74,
                'teacher_id' => NULL,
                'created_at' => '2019-11-26 11:53:05',
                'updated_at' => '2019-11-26 11:53:05',
            ),
            55 => 
            array (
                'id' => 189,
                'name' => 'EX.PB.007',
                'level_id' => NULL,
                'school_id' => 74,
                'teacher_id' => NULL,
                'created_at' => '2019-11-26 11:53:05',
                'updated_at' => '2019-11-26 11:53:05',
            ),
            56 => 
            array (
                'id' => 190,
                'name' => 'EX.PB.008',
                'level_id' => NULL,
                'school_id' => 74,
                'teacher_id' => NULL,
                'created_at' => '2019-11-26 11:53:06',
                'updated_at' => '2019-11-26 11:53:06',
            ),
            57 => 
            array (
                'id' => 191,
                'name' => 'EX.PB.009',
                'level_id' => NULL,
                'school_id' => 74,
                'teacher_id' => NULL,
                'created_at' => '2019-11-26 11:53:06',
                'updated_at' => '2019-11-26 11:53:06',
            ),
            58 => 
            array (
                'id' => 192,
                'name' => 'EX.PB.010',
                'level_id' => NULL,
                'school_id' => 74,
                'teacher_id' => NULL,
                'created_at' => '2019-11-26 11:53:06',
                'updated_at' => '2019-11-26 11:53:06',
            ),
            59 => 
            array (
                'id' => 193,
                'name' => 'EX.PB.011',
                'level_id' => NULL,
                'school_id' => 74,
                'teacher_id' => NULL,
                'created_at' => '2019-11-26 11:53:06',
                'updated_at' => '2019-11-26 11:53:06',
            ),
            60 => 
            array (
                'id' => 194,
                'name' => 'EX.PB.012',
                'level_id' => NULL,
                'school_id' => 74,
                'teacher_id' => NULL,
                'created_at' => '2019-11-26 11:53:06',
                'updated_at' => '2019-11-26 11:53:06',
            ),
            61 => 
            array (
                'id' => 197,
                'name' => 'EX.PA.001',
                'level_id' => NULL,
                'school_id' => 74,
                'teacher_id' => NULL,
                'created_at' => '2019-11-26 11:59:57',
                'updated_at' => '2019-11-26 11:59:57',
            ),
            62 => 
            array (
                'id' => 198,
                'name' => 'EX.PA.002',
                'level_id' => NULL,
                'school_id' => 74,
                'teacher_id' => NULL,
                'created_at' => '2019-11-26 11:59:58',
                'updated_at' => '2019-11-26 11:59:58',
            ),
            63 => 
            array (
                'id' => 199,
                'name' => 'EX.PA.003',
                'level_id' => NULL,
                'school_id' => 74,
                'teacher_id' => NULL,
                'created_at' => '2019-11-26 11:59:58',
                'updated_at' => '2019-11-26 11:59:58',
            ),
            64 => 
            array (
                'id' => 200,
                'name' => 'EX.PA.004',
                'level_id' => NULL,
                'school_id' => 74,
                'teacher_id' => NULL,
                'created_at' => '2019-11-26 11:59:58',
                'updated_at' => '2019-11-26 11:59:58',
            ),
            65 => 
            array (
                'id' => 201,
                'name' => 'EX.PA.005',
                'level_id' => NULL,
                'school_id' => 74,
                'teacher_id' => NULL,
                'created_at' => '2019-11-26 11:59:58',
                'updated_at' => '2019-11-26 11:59:58',
            ),
            66 => 
            array (
                'id' => 202,
                'name' => 'EX.PA.006',
                'level_id' => NULL,
                'school_id' => 74,
                'teacher_id' => NULL,
                'created_at' => '2019-11-26 11:59:58',
                'updated_at' => '2019-11-26 11:59:58',
            ),
            67 => 
            array (
                'id' => 203,
                'name' => 'EX.PA.007',
                'level_id' => NULL,
                'school_id' => 74,
                'teacher_id' => NULL,
                'created_at' => '2019-11-26 11:59:58',
                'updated_at' => '2019-11-26 11:59:58',
            ),
            68 => 
            array (
                'id' => 206,
                'name' => 'EX.PA.020',
                'level_id' => NULL,
                'school_id' => 75,
                'teacher_id' => NULL,
                'created_at' => '2019-11-26 12:25:50',
                'updated_at' => '2019-11-26 12:25:50',
            ),
            69 => 
            array (
                'id' => 207,
                'name' => 'EX.PA.021',
                'level_id' => NULL,
                'school_id' => 75,
                'teacher_id' => NULL,
                'created_at' => '2019-11-26 12:25:50',
                'updated_at' => '2019-11-26 12:25:50',
            ),
            70 => 
            array (
                'id' => 208,
                'name' => 'EX.PA.022',
                'level_id' => NULL,
                'school_id' => 75,
                'teacher_id' => NULL,
                'created_at' => '2019-11-26 12:25:50',
                'updated_at' => '2019-11-26 12:25:50',
            ),
            71 => 
            array (
                'id' => 209,
                'name' => 'EX.PA.023',
                'level_id' => NULL,
                'school_id' => 75,
                'teacher_id' => NULL,
                'created_at' => '2019-11-26 12:25:51',
                'updated_at' => '2019-11-26 12:25:51',
            ),
            72 => 
            array (
                'id' => 210,
                'name' => 'EX.PA.024',
                'level_id' => NULL,
                'school_id' => 75,
                'teacher_id' => NULL,
                'created_at' => '2019-11-26 12:25:51',
                'updated_at' => '2019-11-26 12:25:51',
            ),
            73 => 
            array (
                'id' => 211,
                'name' => 'EX.PB.LIMECA',
                'level_id' => NULL,
                'school_id' => 74,
                'teacher_id' => NULL,
                'created_at' => '2019-11-27 12:38:40',
                'updated_at' => '2019-11-27 12:38:40',
            ),
            74 => 
            array (
                'id' => 212,
                'name' => 'EX.PA.LIMECA',
                'level_id' => NULL,
                'school_id' => 74,
                'teacher_id' => NULL,
                'created_at' => '2019-11-27 12:39:07',
                'updated_at' => '2019-11-27 12:39:07',
            ),
            75 => 
            array (
                'id' => 213,
                'name' => 'Taller extra escolar primaria alta NCZ',
                'level_id' => 2,
                'school_id' => 3,
                'teacher_id' => NULL,
                'created_at' => '2019-11-27 12:39:16',
                'updated_at' => '2019-12-19 11:09:10',
            ),
            76 => 
            array (
                'id' => 222,
                'name' => 'Taller Extraescolar Viernes CECEQ',
                'level_id' => 1,
                'school_id' => 76,
                'teacher_id' => NULL,
                'created_at' => '2019-12-10 09:37:37',
                'updated_at' => '2019-12-17 09:28:30',
            ),
            77 => 
            array (
                'id' => 223,
                'name' => 'Grupo',
                'level_id' => NULL,
                'school_id' => 79,
                'teacher_id' => NULL,
                'created_at' => '2019-12-11 08:05:45',
                'updated_at' => '2019-12-11 08:05:45',
            ),
            78 => 
            array (
                'id' => 226,
                'name' => 'Mixto P. Baja',
                'level_id' => 7,
                'school_id' => 8,
                'teacher_id' => NULL,
                'created_at' => '2019-12-11 08:18:32',
                'updated_at' => '2019-12-19 08:21:29',
            ),
            79 => 
            array (
                'id' => 227,
                'name' => 'Mixto P. Alta',
                'level_id' => 8,
                'school_id' => 8,
                'teacher_id' => NULL,
                'created_at' => '2019-12-11 08:18:44',
                'updated_at' => '2019-12-19 08:20:35',
            ),
            80 => 
            array (
                'id' => 228,
                'name' => 'Taller Competencia',
                'level_id' => 4,
                'school_id' => 2,
                'teacher_id' => NULL,
                'created_at' => '2019-12-11 08:23:07',
                'updated_at' => '2019-12-12 14:01:39',
            ),
            81 => 
            array (
                'id' => 229,
                'name' => 'Taller Preparatoria',
                'level_id' => NULL,
                'school_id' => 9,
                'teacher_id' => NULL,
                'created_at' => '2019-12-11 08:27:55',
                'updated_at' => '2019-12-11 08:27:55',
            ),
            82 => 
            array (
                'id' => 236,
                'name' => 'Nuevo Continente Zaragoza EX.PB',
                'level_id' => 7,
                'school_id' => 3,
                'teacher_id' => NULL,
                'created_at' => '2019-12-11 10:24:43',
                'updated_at' => '2019-12-19 08:28:40',
            ),
            83 => 
            array (
                'id' => 241,
                'name' => 'Secundaria Colegio del Olmo',
                'level_id' => 4,
                'school_id' => 11,
                'teacher_id' => NULL,
                'created_at' => '2019-12-12 13:09:50',
                'updated_at' => '2019-12-12 13:09:50',
            ),
            84 => 
            array (
                'id' => 242,
                'name' => 'Mixto Preescolar',
                'level_id' => 11,
                'school_id' => 8,
                'teacher_id' => NULL,
                'created_at' => '2019-12-12 14:55:45',
                'updated_at' => '2019-12-19 08:21:05',
            ),
            85 => 
            array (
                'id' => 243,
                'name' => 'P.B Lenox',
                'level_id' => NULL,
                'school_id' => 6,
                'teacher_id' => NULL,
                'created_at' => '2019-12-12 16:13:31',
                'updated_at' => '2019-12-12 16:13:31',
            ),
            86 => 
            array (
                'id' => 244,
                'name' => 'P.A Lenox',
                'level_id' => NULL,
                'school_id' => 6,
                'teacher_id' => NULL,
                'created_at' => '2019-12-12 16:14:19',
                'updated_at' => '2019-12-12 16:14:19',
            ),
            87 => 
            array (
                'id' => 245,
                'name' => 'ROBOTICA',
                'level_id' => NULL,
                'school_id' => 79,
                'teacher_id' => NULL,
                'created_at' => '2019-12-16 11:19:07',
                'updated_at' => '2019-12-16 11:19:07',
            ),
            88 => 
            array (
                'id' => 246,
                'name' => 'TALLER EXTRA ESCOLAR PRIMARIA ALTA',
                'level_id' => NULL,
                'school_id' => 13,
                'teacher_id' => NULL,
                'created_at' => '2019-12-17 11:01:36',
                'updated_at' => '2019-12-17 11:05:23',
            ),
            89 => 
            array (
                'id' => 251,
                'name' => 'MARTES Y JUEVES PREESCOLAR',
                'level_id' => 11,
                'school_id' => 15,
                'teacher_id' => NULL,
                'created_at' => '2019-12-17 16:31:24',
                'updated_at' => '2019-12-17 16:31:24',
            ),
            90 => 
            array (
                'id' => 252,
                'name' => 'MARTES Y JUEVES PRIMARIA',
                'level_id' => 7,
                'school_id' => 15,
                'teacher_id' => NULL,
                'created_at' => '2019-12-17 16:32:17',
                'updated_at' => '2019-12-17 16:32:17',
            ),
            91 => 
            array (
                'id' => 253,
                'name' => 'VIERNES PREESCOLAR',
                'level_id' => 11,
                'school_id' => 15,
                'teacher_id' => NULL,
                'created_at' => '2019-12-17 16:33:30',
                'updated_at' => '2019-12-17 16:33:30',
            ),
            92 => 
            array (
                'id' => 257,
                'name' => 'Principiantes',
                'level_id' => 7,
                'school_id' => 7,
                'teacher_id' => NULL,
                'created_at' => '2019-12-18 15:03:45',
                'updated_at' => '2019-12-18 15:18:47',
            ),
            93 => 
            array (
                'id' => 258,
                'name' => 'Intermedio',
                'level_id' => 8,
                'school_id' => 7,
                'teacher_id' => NULL,
                'created_at' => '2019-12-18 15:04:03',
                'updated_at' => '2019-12-18 15:20:49',
            ),
            94 => 
            array (
                'id' => 259,
                'name' => 'Iniciales',
                'level_id' => 7,
                'school_id' => 7,
                'teacher_id' => NULL,
                'created_at' => '2019-12-18 15:04:19',
                'updated_at' => '2019-12-18 15:14:11',
            ),
            95 => 
            array (
                'id' => 260,
                'name' => 'Competencia',
                'level_id' => 9,
                'school_id' => 1,
                'teacher_id' => NULL,
                'created_at' => '2019-12-18 15:04:36',
                'updated_at' => '2019-12-19 14:23:57',
            ),
            96 => 
            array (
                'id' => 261,
                'name' => 'Avanzados',
                'level_id' => 8,
                'school_id' => 7,
                'teacher_id' => NULL,
                'created_at' => '2019-12-18 15:06:15',
                'updated_at' => '2019-12-18 15:08:22',
            ),
            97 => 
            array (
                'id' => 262,
                'name' => 'Secundaria Monte Alban 2',
                'level_id' => 4,
                'school_id' => 4,
                'teacher_id' => NULL,
                'created_at' => '2019-12-18 15:39:29',
                'updated_at' => '2019-12-18 15:45:58',
            ),
            98 => 
            array (
                'id' => 264,
                'name' => 'TALLER EXTRA ESCOLAR PRIMARIA ALTA',
                'level_id' => 2,
                'school_id' => 1,
                'teacher_id' => NULL,
                'created_at' => '2019-12-18 17:21:15',
                'updated_at' => '2019-12-18 17:31:05',
            ),
            99 => 
            array (
                'id' => 265,
                'name' => 'TALLER EXTRA ESCOLAR PRIMARIA BAJA',
                'level_id' => 1,
                'school_id' => 1,
                'teacher_id' => NULL,
                'created_at' => '2019-12-18 17:24:13',
                'updated_at' => '2019-12-18 17:33:01',
            ),
            100 => 
            array (
                'id' => 269,
                'name' => 'MARTES Y JUEVES PRIMARIA A',
                'level_id' => NULL,
                'school_id' => 86,
                'teacher_id' => NULL,
                'created_at' => '2019-12-18 17:37:25',
                'updated_at' => '2019-12-19 11:49:05',
            ),
            101 => 
            array (
                'id' => 270,
                'name' => 'LUNES Y MIERCOLES PRIMARIA A',
                'level_id' => NULL,
                'school_id' => 86,
                'teacher_id' => NULL,
                'created_at' => '2019-12-18 17:38:30',
                'updated_at' => '2019-12-19 11:47:07',
            ),
            102 => 
            array (
                'id' => 271,
                'name' => 'LUNES Y MIERCOLES PRE 2',
                'level_id' => NULL,
                'school_id' => 86,
                'teacher_id' => NULL,
                'created_at' => '2019-12-18 17:39:15',
                'updated_at' => '2019-12-19 16:35:35',
            ),
            103 => 
            array (
                'id' => 272,
                'name' => 'MARTES Y JUEVES PREESCOLAR 2',
                'level_id' => NULL,
                'school_id' => 86,
                'teacher_id' => NULL,
                'created_at' => '2019-12-18 17:41:35',
                'updated_at' => '2019-12-19 11:52:01',
            ),
            104 => 
            array (
                'id' => 273,
                'name' => 'VIERNES PRESCOLAR 2',
                'level_id' => NULL,
                'school_id' => 86,
                'teacher_id' => NULL,
                'created_at' => '2019-12-18 17:42:15',
                'updated_at' => '2019-12-19 11:53:57',
            ),
            105 => 
            array (
                'id' => 281,
                'name' => 'Monte Alban - Primaria Baja',
                'level_id' => 7,
                'school_id' => 4,
                'teacher_id' => NULL,
                'created_at' => '2019-12-18 21:25:40',
                'updated_at' => '2019-12-18 21:28:40',
            ),
            106 => 
            array (
                'id' => 286,
                'name' => 'Instituto Franco - Primaria Alta',
                'level_id' => 8,
                'school_id' => 5,
                'teacher_id' => NULL,
                'created_at' => '2019-12-19 09:33:45',
                'updated_at' => '2019-12-19 16:12:53',
            ),
            107 => 
            array (
                'id' => 287,
                'name' => 'Instituto Franco - Primaria Baja',
                'level_id' => 7,
                'school_id' => 5,
                'teacher_id' => NULL,
                'created_at' => '2019-12-19 09:42:11',
                'updated_at' => '2019-12-19 09:42:11',
            ),
            108 => 
            array (
                'id' => 288,
                'name' => 'Martes y jueves',
                'level_id' => 11,
                'school_id' => 86,
                'teacher_id' => NULL,
                'created_at' => '2019-12-19 10:32:28',
                'updated_at' => '2019-12-19 10:32:28',
            ),
            109 => 
            array (
                'id' => 291,
                'name' => 'Viernes',
                'level_id' => 11,
                'school_id' => 86,
                'teacher_id' => NULL,
                'created_at' => '2019-12-19 10:59:53',
                'updated_at' => '2019-12-19 11:09:59',
            ),
            110 => 
            array (
                'id' => 292,
                'name' => 'Wedo 1.0',
                'level_id' => 7,
                'school_id' => 86,
                'teacher_id' => NULL,
                'created_at' => '2019-12-19 11:05:39',
                'updated_at' => '2019-12-19 11:05:39',
            ),
            111 => 
            array (
                'id' => 293,
                'name' => 'Secundaria Monte Alban 1',
                'level_id' => 4,
                'school_id' => 4,
                'teacher_id' => NULL,
                'created_at' => '2019-12-19 11:07:46',
                'updated_at' => '2019-12-19 12:09:43',
            ),
            112 => 
            array (
                'id' => 294,
                'name' => 'Wedo 2.0',
                'level_id' => 7,
                'school_id' => 86,
                'teacher_id' => NULL,
                'created_at' => '2019-12-19 11:16:27',
                'updated_at' => '2019-12-19 11:16:27',
            ),
            113 => 
            array (
                'id' => 295,
                'name' => 'Monte Alban - Primaria Alta',
                'level_id' => 8,
                'school_id' => 4,
                'teacher_id' => NULL,
                'created_at' => '2019-12-19 11:17:32',
                'updated_at' => '2019-12-19 11:20:27',
            ),
            114 => 
            array (
                'id' => 296,
                'name' => 'Clase Sabado',
                'level_id' => 8,
                'school_id' => 77,
                'teacher_id' => NULL,
                'created_at' => '2019-12-19 11:34:16',
                'updated_at' => '2019-12-19 11:37:31',
            ),
            115 => 
            array (
                'id' => 298,
                'name' => 'CECEQ - JUEVES',
                'level_id' => 8,
                'school_id' => 76,
                'teacher_id' => NULL,
                'created_at' => '2019-12-19 12:30:36',
                'updated_at' => '2019-12-19 12:35:17',
            ),
            116 => 
            array (
                'id' => 303,
                'name' => 'LUNES Y MIÉRCOLES-JFK.PB.',
                'level_id' => NULL,
                'school_id' => 86,
                'teacher_id' => NULL,
                'created_at' => '2019-12-20 10:42:12',
                'updated_at' => '2019-12-20 10:42:12',
            ),
            117 => 
            array (
                'id' => 304,
                'name' => 'MARTES Y JUEVES-JFK.PB.',
                'level_id' => NULL,
                'school_id' => 86,
                'teacher_id' => NULL,
                'created_at' => '2019-12-20 10:43:33',
                'updated_at' => '2019-12-20 10:43:33',
            ),
            118 => 
            array (
                'id' => 305,
                'name' => 'VIERNES-JFK.PRE.',
                'level_id' => NULL,
                'school_id' => 86,
                'teacher_id' => NULL,
                'created_at' => '2019-12-20 10:45:17',
                'updated_at' => '2019-12-20 10:45:17',
            ),
            119 => 
            array (
                'id' => 306,
                'name' => 'WEDO 1.0-JFK.PB.',
                'level_id' => NULL,
                'school_id' => 86,
                'teacher_id' => NULL,
                'created_at' => '2019-12-20 10:46:19',
                'updated_at' => '2019-12-20 10:46:19',
            ),
            120 => 
            array (
                'id' => 307,
                'name' => 'Wedo 2.0-JFK.PB.',
                'level_id' => NULL,
                'school_id' => 86,
                'teacher_id' => NULL,
                'created_at' => '2019-12-20 10:47:00',
                'updated_at' => '2019-12-20 10:47:00',
            ),
        ));
        
        
    }
}