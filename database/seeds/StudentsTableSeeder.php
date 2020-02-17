<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('students')->delete();
        
        \DB::table('students')->insert(array (
            0 => 
            array (
                'id' => 56,
                'code' => 'LX-PB-003',
                'user_id' => 200,
                'school_id' => 6,
                'group_id' => 111,
                'created_at' => '2019-08-16 20:56:24',
                'updated_at' => '2019-09-23 10:37:16',
            ),
            1 => 
            array (
                'id' => 57,
                'code' => 'LX-PB-004',
                'user_id' => 201,
                'school_id' => 6,
                'group_id' => 111,
                'created_at' => '2019-08-16 20:56:25',
                'updated_at' => '2019-09-23 10:37:16',
            ),
            2 => 
            array (
                'id' => 58,
                'code' => 'LX-PB-005',
                'user_id' => 202,
                'school_id' => 6,
                'group_id' => 111,
                'created_at' => '2019-08-16 20:56:25',
                'updated_at' => '2019-09-23 10:37:16',
            ),
            3 => 
            array (
                'id' => 59,
                'code' => 'LX-PB-006',
                'user_id' => 203,
                'school_id' => 6,
                'group_id' => 111,
                'created_at' => '2019-08-16 20:56:25',
                'updated_at' => '2019-09-23 10:37:16',
            ),
            4 => 
            array (
                'id' => 60,
                'code' => 'LX-PB-009',
                'user_id' => 204,
                'school_id' => 6,
                'group_id' => 111,
                'created_at' => '2019-08-16 20:56:25',
                'updated_at' => '2019-09-23 10:37:16',
            ),
            5 => 
            array (
                'id' => 61,
                'code' => NULL,
                'user_id' => 205,
                'school_id' => 6,
                'group_id' => 31,
                'created_at' => '2019-08-16 20:56:25',
                'updated_at' => '2019-10-19 19:15:43',
            ),
            6 => 
            array (
                'id' => 62,
                'code' => 'LX-PB-013',
                'user_id' => 206,
                'school_id' => 6,
                'group_id' => 111,
                'created_at' => '2019-08-16 20:56:25',
                'updated_at' => '2019-09-23 10:37:16',
            ),
            7 => 
            array (
                'id' => 63,
                'code' => 'LX-PB-016',
                'user_id' => 207,
                'school_id' => 6,
                'group_id' => 111,
                'created_at' => '2019-08-16 20:56:25',
                'updated_at' => '2019-09-23 10:37:16',
            ),
            8 => 
            array (
                'id' => 64,
                'code' => NULL,
                'user_id' => 208,
                'school_id' => 6,
                'group_id' => 31,
                'created_at' => '2019-08-16 20:56:25',
                'updated_at' => '2019-10-19 19:15:43',
            ),
            9 => 
            array (
                'id' => 65,
                'code' => NULL,
                'user_id' => 209,
                'school_id' => 6,
                'group_id' => 32,
                'created_at' => '2019-08-16 20:56:25',
                'updated_at' => '2019-10-19 19:32:11',
            ),
            10 => 
            array (
                'id' => 66,
                'code' => 'LX-PB-019',
                'user_id' => 210,
                'school_id' => 6,
                'group_id' => 111,
                'created_at' => '2019-08-16 20:56:26',
                'updated_at' => '2019-09-23 10:37:16',
            ),
            11 => 
            array (
                'id' => 67,
                'code' => 'LX-PB-020',
                'user_id' => 211,
                'school_id' => 6,
                'group_id' => 111,
                'created_at' => '2019-08-16 20:56:26',
                'updated_at' => '2019-09-23 10:37:16',
            ),
            12 => 
            array (
                'id' => 68,
                'code' => NULL,
                'user_id' => 212,
                'school_id' => 6,
                'group_id' => 31,
                'created_at' => '2019-08-16 20:56:26',
                'updated_at' => '2019-10-19 19:15:43',
            ),
            13 => 
            array (
                'id' => 69,
                'code' => 'LX-PB-023',
                'user_id' => 213,
                'school_id' => 6,
                'group_id' => 111,
                'created_at' => '2019-08-16 20:56:26',
                'updated_at' => '2019-09-23 10:37:16',
            ),
            14 => 
            array (
                'id' => 70,
                'code' => NULL,
                'user_id' => 214,
                'school_id' => 6,
                'group_id' => 32,
                'created_at' => '2019-08-16 20:56:26',
                'updated_at' => '2019-10-19 19:32:11',
            ),
            15 => 
            array (
                'id' => 71,
                'code' => 'LX-PB-030',
                'user_id' => 215,
                'school_id' => 6,
                'group_id' => 111,
                'created_at' => '2019-08-16 20:56:26',
                'updated_at' => '2019-09-23 10:37:16',
            ),
            16 => 
            array (
                'id' => 72,
                'code' => 'LX-PB-031',
                'user_id' => 216,
                'school_id' => 6,
                'group_id' => 111,
                'created_at' => '2019-08-16 20:56:26',
                'updated_at' => '2019-09-23 10:37:16',
            ),
            17 => 
            array (
                'id' => 73,
                'code' => 'LX-PB-035',
                'user_id' => 217,
                'school_id' => 6,
                'group_id' => 111,
                'created_at' => '2019-08-16 20:56:26',
                'updated_at' => '2019-09-23 10:37:16',
            ),
            18 => 
            array (
                'id' => 80,
                'code' => 'LX-PA-001',
                'user_id' => 225,
                'school_id' => 6,
                'group_id' => 48,
                'created_at' => '2019-08-19 20:50:55',
                'updated_at' => '2019-08-19 20:50:55',
            ),
            19 => 
            array (
                'id' => 81,
                'code' => 'LX-PA-003',
                'user_id' => 226,
                'school_id' => 6,
                'group_id' => 48,
                'created_at' => '2019-08-19 20:50:55',
                'updated_at' => '2019-08-19 20:50:55',
            ),
            20 => 
            array (
                'id' => 82,
                'code' => 'LX-PA-005',
                'user_id' => 227,
                'school_id' => 6,
                'group_id' => 48,
                'created_at' => '2019-08-19 20:50:55',
                'updated_at' => '2019-08-19 20:50:55',
            ),
            21 => 
            array (
                'id' => 83,
                'code' => 'LX-PA-006',
                'user_id' => 228,
                'school_id' => 6,
                'group_id' => 48,
                'created_at' => '2019-08-19 20:50:56',
                'updated_at' => '2019-08-19 20:50:56',
            ),
            22 => 
            array (
                'id' => 84,
                'code' => 'LX-PA-009',
                'user_id' => 229,
                'school_id' => 6,
                'group_id' => 48,
                'created_at' => '2019-08-19 20:50:56',
                'updated_at' => '2019-08-19 20:50:56',
            ),
            23 => 
            array (
                'id' => 85,
                'code' => 'LX-PA-010',
                'user_id' => 230,
                'school_id' => 6,
                'group_id' => 48,
                'created_at' => '2019-08-19 20:50:56',
                'updated_at' => '2019-08-19 20:50:56',
            ),
            24 => 
            array (
                'id' => 86,
                'code' => 'LX-PA-012',
                'user_id' => 231,
                'school_id' => 6,
                'group_id' => 48,
                'created_at' => '2019-08-19 20:50:56',
                'updated_at' => '2019-08-19 20:50:56',
            ),
            25 => 
            array (
                'id' => 87,
                'code' => 'LX-PA-013',
                'user_id' => 232,
                'school_id' => 6,
                'group_id' => 48,
                'created_at' => '2019-08-19 20:50:56',
                'updated_at' => '2019-08-19 20:50:56',
            ),
            26 => 
            array (
                'id' => 88,
                'code' => NULL,
                'user_id' => 233,
                'school_id' => 6,
                'group_id' => 34,
                'created_at' => '2019-08-19 20:50:56',
                'updated_at' => '2019-10-19 19:41:50',
            ),
            27 => 
            array (
                'id' => 89,
                'code' => 'LX-PA-017',
                'user_id' => 234,
                'school_id' => 6,
                'group_id' => 48,
                'created_at' => '2019-08-19 20:50:56',
                'updated_at' => '2019-08-19 20:50:56',
            ),
            28 => 
            array (
                'id' => 90,
                'code' => 'LX-PA-018',
                'user_id' => 235,
                'school_id' => 6,
                'group_id' => 48,
                'created_at' => '2019-08-19 20:50:56',
                'updated_at' => '2019-08-19 20:50:56',
            ),
            29 => 
            array (
                'id' => 91,
                'code' => 'LX-PA-019',
                'user_id' => 236,
                'school_id' => 6,
                'group_id' => 48,
                'created_at' => '2019-08-19 20:50:56',
                'updated_at' => '2019-08-19 20:50:56',
            ),
            30 => 
            array (
                'id' => 92,
                'code' => 'LX-PA-020',
                'user_id' => 237,
                'school_id' => 6,
                'group_id' => 48,
                'created_at' => '2019-08-19 20:50:57',
                'updated_at' => '2019-08-19 20:50:57',
            ),
            31 => 
            array (
                'id' => 93,
                'code' => 'LX-PA-021',
                'user_id' => 238,
                'school_id' => 6,
                'group_id' => 48,
                'created_at' => '2019-08-19 20:50:57',
                'updated_at' => '2019-08-19 20:50:57',
            ),
            32 => 
            array (
                'id' => 94,
                'code' => 'LX-PA-022',
                'user_id' => 239,
                'school_id' => 6,
                'group_id' => 48,
                'created_at' => '2019-08-19 20:50:57',
                'updated_at' => '2019-08-19 20:50:57',
            ),
            33 => 
            array (
                'id' => 95,
                'code' => 'LX-PA-030',
                'user_id' => 240,
                'school_id' => 6,
                'group_id' => 48,
                'created_at' => '2019-08-19 20:50:57',
                'updated_at' => '2019-08-19 20:50:57',
            ),
            34 => 
            array (
                'id' => 157,
                'code' => 'NC/SEC/22/00',
                'user_id' => 312,
                'school_id' => 3,
                'group_id' => 51,
                'created_at' => '2019-08-22 17:04:30',
                'updated_at' => '2019-08-22 17:04:30',
            ),
            35 => 
            array (
                'id' => 158,
                'code' => 'NC/SEC/22/01',
                'user_id' => 313,
                'school_id' => 3,
                'group_id' => 51,
                'created_at' => '2019-08-22 17:04:30',
                'updated_at' => '2019-08-22 17:04:30',
            ),
            36 => 
            array (
                'id' => 159,
                'code' => 'NC/SEC/22/02',
                'user_id' => 314,
                'school_id' => 3,
                'group_id' => 51,
                'created_at' => '2019-08-22 17:04:30',
                'updated_at' => '2019-08-22 17:04:30',
            ),
            37 => 
            array (
                'id' => 160,
                'code' => 'NC/SEC/22/03',
                'user_id' => 315,
                'school_id' => 3,
                'group_id' => 51,
                'created_at' => '2019-08-22 17:04:30',
                'updated_at' => '2019-08-22 17:04:30',
            ),
            38 => 
            array (
                'id' => 161,
                'code' => 'NC/SEC/22/04',
                'user_id' => 316,
                'school_id' => 3,
                'group_id' => 51,
                'created_at' => '2019-08-22 17:04:30',
                'updated_at' => '2019-08-22 17:04:30',
            ),
            39 => 
            array (
                'id' => 162,
                'code' => 'NC/SEC/22/05',
                'user_id' => 317,
                'school_id' => 3,
                'group_id' => 51,
                'created_at' => '2019-08-22 17:04:30',
                'updated_at' => '2019-08-22 17:04:30',
            ),
            40 => 
            array (
                'id' => 163,
                'code' => 'NC/SEC/22/06',
                'user_id' => 318,
                'school_id' => 3,
                'group_id' => 51,
                'created_at' => '2019-08-22 17:04:31',
                'updated_at' => '2019-08-22 17:04:31',
            ),
            41 => 
            array (
                'id' => 164,
                'code' => 'NC/SEC/22/07',
                'user_id' => 319,
                'school_id' => 3,
                'group_id' => 51,
                'created_at' => '2019-08-22 17:04:31',
                'updated_at' => '2019-08-22 17:04:31',
            ),
            42 => 
            array (
                'id' => 165,
                'code' => 'NC/SEC/22/08',
                'user_id' => 320,
                'school_id' => 3,
                'group_id' => 51,
                'created_at' => '2019-08-22 17:04:31',
                'updated_at' => '2019-08-22 17:04:31',
            ),
            43 => 
            array (
                'id' => 166,
                'code' => 'NC/SEC/22/09',
                'user_id' => 321,
                'school_id' => 3,
                'group_id' => 51,
                'created_at' => '2019-08-22 17:04:31',
                'updated_at' => '2019-08-22 17:04:31',
            ),
            44 => 
            array (
                'id' => 167,
                'code' => 'NC/SEC/22/10',
                'user_id' => 322,
                'school_id' => 3,
                'group_id' => 51,
                'created_at' => '2019-08-22 17:04:31',
                'updated_at' => '2019-08-22 17:04:31',
            ),
            45 => 
            array (
                'id' => 168,
                'code' => 'NC/SEC/22/11',
                'user_id' => 323,
                'school_id' => 3,
                'group_id' => 51,
                'created_at' => '2019-08-22 17:04:31',
                'updated_at' => '2019-08-22 17:04:31',
            ),
            46 => 
            array (
                'id' => 169,
                'code' => 'NC/SEC/22/12',
                'user_id' => 324,
                'school_id' => 3,
                'group_id' => 51,
                'created_at' => '2019-08-22 17:04:31',
                'updated_at' => '2019-08-22 17:04:31',
            ),
            47 => 
            array (
                'id' => 170,
                'code' => 'NC/SEC/22/13',
                'user_id' => 325,
                'school_id' => 3,
                'group_id' => 51,
                'created_at' => '2019-08-22 17:04:31',
                'updated_at' => '2019-08-22 17:04:31',
            ),
            48 => 
            array (
                'id' => 171,
                'code' => 'NC/SEC/22/14',
                'user_id' => 326,
                'school_id' => 3,
                'group_id' => 51,
                'created_at' => '2019-08-22 17:04:31',
                'updated_at' => '2019-08-22 17:04:31',
            ),
            49 => 
            array (
                'id' => 172,
                'code' => 'NC/SEC/22/15',
                'user_id' => 327,
                'school_id' => 3,
                'group_id' => 51,
                'created_at' => '2019-08-22 17:04:32',
                'updated_at' => '2019-08-22 17:04:32',
            ),
            50 => 
            array (
                'id' => 173,
                'code' => 'NC/SEC/22/16',
                'user_id' => 328,
                'school_id' => 3,
                'group_id' => 51,
                'created_at' => '2019-08-22 17:04:32',
                'updated_at' => '2019-08-22 17:04:32',
            ),
            51 => 
            array (
                'id' => 174,
                'code' => 'NC/SEC/22/17',
                'user_id' => 329,
                'school_id' => 3,
                'group_id' => 51,
                'created_at' => '2019-08-22 17:04:32',
                'updated_at' => '2019-08-22 17:04:32',
            ),
            52 => 
            array (
                'id' => 175,
                'code' => 'NC/SEC/22/18',
                'user_id' => 330,
                'school_id' => 3,
                'group_id' => 51,
                'created_at' => '2019-08-22 17:04:32',
                'updated_at' => '2019-08-22 17:04:32',
            ),
            53 => 
            array (
                'id' => 176,
                'code' => 'NC/SEC/22/19',
                'user_id' => 331,
                'school_id' => 3,
                'group_id' => 51,
                'created_at' => '2019-08-22 17:04:32',
                'updated_at' => '2019-08-22 17:04:32',
            ),
            54 => 
            array (
                'id' => 177,
                'code' => 'NC/SEC/22/20',
                'user_id' => 332,
                'school_id' => 3,
                'group_id' => 51,
                'created_at' => '2019-08-22 17:04:32',
                'updated_at' => '2019-08-22 17:04:32',
            ),
            55 => 
            array (
                'id' => 178,
                'code' => 'NC/SEC/22/21',
                'user_id' => 333,
                'school_id' => 3,
                'group_id' => 51,
                'created_at' => '2019-08-22 17:04:32',
                'updated_at' => '2019-08-22 17:04:32',
            ),
            56 => 
            array (
                'id' => 179,
                'code' => 'NC/SEC/22/22',
                'user_id' => 334,
                'school_id' => 3,
                'group_id' => 51,
                'created_at' => '2019-08-22 17:04:32',
                'updated_at' => '2019-08-22 17:04:32',
            ),
            57 => 
            array (
                'id' => 180,
                'code' => 'NC/SEC/22/23',
                'user_id' => 335,
                'school_id' => 3,
                'group_id' => 51,
                'created_at' => '2019-08-22 17:04:32',
                'updated_at' => '2019-08-22 17:04:32',
            ),
            58 => 
            array (
                'id' => 181,
                'code' => 'NC/SEC/22/24',
                'user_id' => 336,
                'school_id' => 3,
                'group_id' => 51,
                'created_at' => '2019-08-22 17:04:33',
                'updated_at' => '2019-08-22 17:04:33',
            ),
            59 => 
            array (
                'id' => 182,
                'code' => 'NC/SEC/22/25',
                'user_id' => 337,
                'school_id' => 3,
                'group_id' => 51,
                'created_at' => '2019-08-22 17:04:33',
                'updated_at' => '2019-08-22 17:04:33',
            ),
            60 => 
            array (
                'id' => 183,
                'code' => 'NC/SEC/22/26',
                'user_id' => 338,
                'school_id' => 3,
                'group_id' => 51,
                'created_at' => '2019-08-22 17:04:33',
                'updated_at' => '2019-08-22 17:04:33',
            ),
            61 => 
            array (
                'id' => 184,
                'code' => 'NC/SEC/22/27',
                'user_id' => 339,
                'school_id' => 3,
                'group_id' => 51,
                'created_at' => '2019-08-22 17:04:33',
                'updated_at' => '2019-08-22 17:04:33',
            ),
            62 => 
            array (
                'id' => 185,
                'code' => 'NC/SEC/22/28',
                'user_id' => 340,
                'school_id' => 3,
                'group_id' => 51,
                'created_at' => '2019-08-22 17:04:33',
                'updated_at' => '2019-08-22 17:04:33',
            ),
            63 => 
            array (
                'id' => 189,
                'code' => 'NC/SEC/00',
                'user_id' => 344,
                'school_id' => 21,
                'group_id' => 56,
                'created_at' => '2019-08-22 17:11:35',
                'updated_at' => '2019-08-22 17:11:35',
            ),
            64 => 
            array (
                'id' => 190,
                'code' => 'NC/SEC/01',
                'user_id' => 345,
                'school_id' => 21,
                'group_id' => 56,
                'created_at' => '2019-08-22 17:11:36',
                'updated_at' => '2019-08-22 17:11:36',
            ),
            65 => 
            array (
                'id' => 191,
                'code' => 'NC/SEC/02',
                'user_id' => 346,
                'school_id' => 21,
                'group_id' => 56,
                'created_at' => '2019-08-22 17:11:36',
                'updated_at' => '2019-08-22 17:11:36',
            ),
            66 => 
            array (
                'id' => 192,
                'code' => 'NC/SEC/03',
                'user_id' => 347,
                'school_id' => 21,
                'group_id' => 56,
                'created_at' => '2019-08-22 17:11:36',
                'updated_at' => '2019-08-22 17:11:36',
            ),
            67 => 
            array (
                'id' => 193,
                'code' => 'NC/SEC/04',
                'user_id' => 348,
                'school_id' => 21,
                'group_id' => 56,
                'created_at' => '2019-08-22 17:11:36',
                'updated_at' => '2019-08-22 17:11:36',
            ),
            68 => 
            array (
                'id' => 194,
                'code' => 'NC/SEC/05',
                'user_id' => 349,
                'school_id' => 21,
                'group_id' => 56,
                'created_at' => '2019-08-22 17:11:36',
                'updated_at' => '2019-08-22 17:11:36',
            ),
            69 => 
            array (
                'id' => 195,
                'code' => 'NC/SEC/06',
                'user_id' => 350,
                'school_id' => 21,
                'group_id' => 56,
                'created_at' => '2019-08-22 17:11:36',
                'updated_at' => '2019-08-22 17:11:36',
            ),
            70 => 
            array (
                'id' => 196,
                'code' => 'NC/SEC/07',
                'user_id' => 351,
                'school_id' => 21,
                'group_id' => 56,
                'created_at' => '2019-08-22 17:11:36',
                'updated_at' => '2019-08-22 17:11:36',
            ),
            71 => 
            array (
                'id' => 197,
                'code' => 'NC/SEC/08',
                'user_id' => 352,
                'school_id' => 21,
                'group_id' => 56,
                'created_at' => '2019-08-22 17:11:37',
                'updated_at' => '2019-08-22 17:11:37',
            ),
            72 => 
            array (
                'id' => 198,
                'code' => 'NC/SEC/09',
                'user_id' => 353,
                'school_id' => 21,
                'group_id' => 56,
                'created_at' => '2019-08-22 17:11:37',
                'updated_at' => '2019-08-22 17:11:37',
            ),
            73 => 
            array (
                'id' => 199,
                'code' => 'NC/SEC/10',
                'user_id' => 354,
                'school_id' => 21,
                'group_id' => 56,
                'created_at' => '2019-08-22 17:11:37',
                'updated_at' => '2019-08-22 17:11:37',
            ),
            74 => 
            array (
                'id' => 200,
                'code' => 'NC/SEC/11',
                'user_id' => 355,
                'school_id' => 21,
                'group_id' => 56,
                'created_at' => '2019-08-22 17:11:37',
                'updated_at' => '2019-08-22 17:11:37',
            ),
            75 => 
            array (
                'id' => 201,
                'code' => 'NC/SEC/12',
                'user_id' => 356,
                'school_id' => 21,
                'group_id' => 56,
                'created_at' => '2019-08-22 17:11:37',
                'updated_at' => '2019-08-22 17:11:37',
            ),
            76 => 
            array (
                'id' => 202,
                'code' => 'NC/SEC/13',
                'user_id' => 357,
                'school_id' => 21,
                'group_id' => 56,
                'created_at' => '2019-08-22 17:11:37',
                'updated_at' => '2019-08-22 17:11:37',
            ),
            77 => 
            array (
                'id' => 203,
                'code' => 'NC/SEC/14',
                'user_id' => 358,
                'school_id' => 21,
                'group_id' => 56,
                'created_at' => '2019-08-22 17:11:37',
                'updated_at' => '2019-08-22 17:11:37',
            ),
            78 => 
            array (
                'id' => 204,
                'code' => 'NC/SEC/15',
                'user_id' => 359,
                'school_id' => 21,
                'group_id' => 56,
                'created_at' => '2019-08-22 17:11:37',
                'updated_at' => '2019-08-22 17:11:37',
            ),
            79 => 
            array (
                'id' => 205,
                'code' => 'NC/SEC/16',
                'user_id' => 360,
                'school_id' => 21,
                'group_id' => 56,
                'created_at' => '2019-08-22 17:11:38',
                'updated_at' => '2019-08-22 17:11:38',
            ),
            80 => 
            array (
                'id' => 206,
                'code' => 'NC/SEC/17',
                'user_id' => 361,
                'school_id' => 21,
                'group_id' => 56,
                'created_at' => '2019-08-22 17:11:38',
                'updated_at' => '2019-08-22 17:11:38',
            ),
            81 => 
            array (
                'id' => 207,
                'code' => 'NC/SEC/18',
                'user_id' => 362,
                'school_id' => 21,
                'group_id' => 56,
                'created_at' => '2019-08-22 17:11:38',
                'updated_at' => '2019-08-22 17:11:38',
            ),
            82 => 
            array (
                'id' => 208,
                'code' => 'NC/SEC/19',
                'user_id' => 363,
                'school_id' => 21,
                'group_id' => 56,
                'created_at' => '2019-08-22 17:11:38',
                'updated_at' => '2019-08-22 17:11:38',
            ),
            83 => 
            array (
                'id' => 209,
                'code' => 'NC/SEC/20',
                'user_id' => 364,
                'school_id' => 21,
                'group_id' => 56,
                'created_at' => '2019-08-22 17:11:38',
                'updated_at' => '2019-08-22 17:11:38',
            ),
            84 => 
            array (
                'id' => 210,
                'code' => 'NC/SEC/21',
                'user_id' => 365,
                'school_id' => 21,
                'group_id' => 56,
                'created_at' => '2019-08-22 17:11:38',
                'updated_at' => '2019-08-22 17:11:38',
            ),
            85 => 
            array (
                'id' => 211,
                'code' => 'NC/SEC/22',
                'user_id' => 366,
                'school_id' => 21,
                'group_id' => 56,
                'created_at' => '2019-08-22 17:11:38',
                'updated_at' => '2019-08-22 17:11:38',
            ),
            86 => 
            array (
                'id' => 212,
                'code' => 'NC/SEC/23',
                'user_id' => 367,
                'school_id' => 21,
                'group_id' => 56,
                'created_at' => '2019-08-22 17:11:38',
                'updated_at' => '2019-08-22 17:11:38',
            ),
            87 => 
            array (
                'id' => 213,
                'code' => 'NC/SEC/24',
                'user_id' => 368,
                'school_id' => 21,
                'group_id' => 56,
                'created_at' => '2019-08-22 17:11:38',
                'updated_at' => '2019-08-22 17:11:38',
            ),
            88 => 
            array (
                'id' => 214,
                'code' => 'NC/SEC/25',
                'user_id' => 369,
                'school_id' => 21,
                'group_id' => 56,
                'created_at' => '2019-08-22 17:11:39',
                'updated_at' => '2019-08-22 17:11:39',
            ),
            89 => 
            array (
                'id' => 215,
                'code' => 'NC/SEC/26',
                'user_id' => 370,
                'school_id' => 21,
                'group_id' => 56,
                'created_at' => '2019-08-22 17:11:39',
                'updated_at' => '2019-08-22 17:11:39',
            ),
            90 => 
            array (
                'id' => 216,
                'code' => 'NC/SEC/27',
                'user_id' => 371,
                'school_id' => 21,
                'group_id' => 56,
                'created_at' => '2019-08-22 17:11:39',
                'updated_at' => '2019-08-22 17:11:39',
            ),
            91 => 
            array (
                'id' => 217,
                'code' => 'NC/SEC/28',
                'user_id' => 372,
                'school_id' => 21,
                'group_id' => 56,
                'created_at' => '2019-08-22 17:11:39',
                'updated_at' => '2019-08-22 17:11:39',
            ),
            92 => 
            array (
                'id' => 218,
                'code' => 'NC/SEC/00',
                'user_id' => 373,
                'school_id' => 22,
                'group_id' => 57,
                'created_at' => '2019-08-22 17:17:01',
                'updated_at' => '2019-08-22 17:17:01',
            ),
            93 => 
            array (
                'id' => 219,
                'code' => 'NC/SEC/01',
                'user_id' => 374,
                'school_id' => 22,
                'group_id' => 57,
                'created_at' => '2019-08-22 17:17:02',
                'updated_at' => '2019-08-22 17:17:02',
            ),
            94 => 
            array (
                'id' => 220,
                'code' => 'NC/SEC/02',
                'user_id' => 375,
                'school_id' => 22,
                'group_id' => 57,
                'created_at' => '2019-08-22 17:17:02',
                'updated_at' => '2019-08-22 17:17:02',
            ),
            95 => 
            array (
                'id' => 221,
                'code' => 'NC/SEC/03',
                'user_id' => 376,
                'school_id' => 22,
                'group_id' => 57,
                'created_at' => '2019-08-22 17:17:02',
                'updated_at' => '2019-08-22 17:17:02',
            ),
            96 => 
            array (
                'id' => 222,
                'code' => 'NC/SEC/04',
                'user_id' => 377,
                'school_id' => 22,
                'group_id' => 57,
                'created_at' => '2019-08-22 17:17:02',
                'updated_at' => '2019-08-22 17:17:02',
            ),
            97 => 
            array (
                'id' => 223,
                'code' => 'NC/SEC/05',
                'user_id' => 378,
                'school_id' => 22,
                'group_id' => 57,
                'created_at' => '2019-08-22 17:17:02',
                'updated_at' => '2019-08-22 17:17:02',
            ),
            98 => 
            array (
                'id' => 224,
                'code' => 'NC/SEC/06',
                'user_id' => 379,
                'school_id' => 22,
                'group_id' => 57,
                'created_at' => '2019-08-22 17:17:02',
                'updated_at' => '2019-08-22 17:17:02',
            ),
            99 => 
            array (
                'id' => 225,
                'code' => 'NC/SEC/07',
                'user_id' => 380,
                'school_id' => 22,
                'group_id' => 57,
                'created_at' => '2019-08-22 17:17:02',
                'updated_at' => '2019-08-22 17:17:02',
            ),
            100 => 
            array (
                'id' => 226,
                'code' => 'NC/SEC/08',
                'user_id' => 381,
                'school_id' => 22,
                'group_id' => 57,
                'created_at' => '2019-08-22 17:17:02',
                'updated_at' => '2019-08-22 17:17:02',
            ),
            101 => 
            array (
                'id' => 227,
                'code' => 'NC/SEC/09',
                'user_id' => 382,
                'school_id' => 22,
                'group_id' => 57,
                'created_at' => '2019-08-22 17:17:03',
                'updated_at' => '2019-08-22 17:17:03',
            ),
            102 => 
            array (
                'id' => 228,
                'code' => 'NC/SEC/10',
                'user_id' => 383,
                'school_id' => 22,
                'group_id' => 57,
                'created_at' => '2019-08-22 17:17:03',
                'updated_at' => '2019-08-22 17:17:03',
            ),
            103 => 
            array (
                'id' => 229,
                'code' => 'NC/SEC/11',
                'user_id' => 384,
                'school_id' => 22,
                'group_id' => 57,
                'created_at' => '2019-08-22 17:17:03',
                'updated_at' => '2019-08-22 17:17:03',
            ),
            104 => 
            array (
                'id' => 230,
                'code' => 'NC/SEC/12',
                'user_id' => 385,
                'school_id' => 22,
                'group_id' => 57,
                'created_at' => '2019-08-22 17:17:03',
                'updated_at' => '2019-08-22 17:17:03',
            ),
            105 => 
            array (
                'id' => 231,
                'code' => 'NC/SEC/13',
                'user_id' => 386,
                'school_id' => 22,
                'group_id' => 57,
                'created_at' => '2019-08-22 17:17:03',
                'updated_at' => '2019-08-22 17:17:03',
            ),
            106 => 
            array (
                'id' => 232,
                'code' => 'NC/SEC/14',
                'user_id' => 387,
                'school_id' => 22,
                'group_id' => 57,
                'created_at' => '2019-08-22 17:17:03',
                'updated_at' => '2019-08-22 17:17:03',
            ),
            107 => 
            array (
                'id' => 233,
                'code' => 'NC/SEC/15',
                'user_id' => 388,
                'school_id' => 22,
                'group_id' => 57,
                'created_at' => '2019-08-22 17:17:03',
                'updated_at' => '2019-08-22 17:17:03',
            ),
            108 => 
            array (
                'id' => 234,
                'code' => 'NC/SEC/16',
                'user_id' => 389,
                'school_id' => 22,
                'group_id' => 57,
                'created_at' => '2019-08-22 17:17:03',
                'updated_at' => '2019-08-22 17:17:03',
            ),
            109 => 
            array (
                'id' => 235,
                'code' => 'NC/SEC/17',
                'user_id' => 390,
                'school_id' => 22,
                'group_id' => 57,
                'created_at' => '2019-08-22 17:17:03',
                'updated_at' => '2019-08-22 17:17:03',
            ),
            110 => 
            array (
                'id' => 236,
                'code' => 'NC/SEC/18',
                'user_id' => 391,
                'school_id' => 22,
                'group_id' => 57,
                'created_at' => '2019-08-22 17:17:04',
                'updated_at' => '2019-08-22 17:17:04',
            ),
            111 => 
            array (
                'id' => 237,
                'code' => 'NC/SEC/19',
                'user_id' => 392,
                'school_id' => 22,
                'group_id' => 57,
                'created_at' => '2019-08-22 17:17:04',
                'updated_at' => '2019-08-22 17:17:04',
            ),
            112 => 
            array (
                'id' => 238,
                'code' => 'NC/SEC/20',
                'user_id' => 393,
                'school_id' => 22,
                'group_id' => 57,
                'created_at' => '2019-08-22 17:17:04',
                'updated_at' => '2019-08-22 17:17:04',
            ),
            113 => 
            array (
                'id' => 239,
                'code' => 'NC/SEC/21',
                'user_id' => 394,
                'school_id' => 22,
                'group_id' => 57,
                'created_at' => '2019-08-22 17:17:04',
                'updated_at' => '2019-08-22 17:17:04',
            ),
            114 => 
            array (
                'id' => 240,
                'code' => 'NC/SEC/22',
                'user_id' => 395,
                'school_id' => 22,
                'group_id' => 57,
                'created_at' => '2019-08-22 17:17:04',
                'updated_at' => '2019-08-22 17:17:04',
            ),
            115 => 
            array (
                'id' => 241,
                'code' => 'NC/SEC/23',
                'user_id' => 396,
                'school_id' => 22,
                'group_id' => 57,
                'created_at' => '2019-08-22 17:17:04',
                'updated_at' => '2019-08-22 17:17:04',
            ),
            116 => 
            array (
                'id' => 242,
                'code' => 'NC/SEC/24',
                'user_id' => 397,
                'school_id' => 22,
                'group_id' => 57,
                'created_at' => '2019-08-22 17:17:04',
                'updated_at' => '2019-08-22 17:17:04',
            ),
            117 => 
            array (
                'id' => 243,
                'code' => 'NC/SEC/25',
                'user_id' => 398,
                'school_id' => 22,
                'group_id' => 57,
                'created_at' => '2019-08-22 17:17:04',
                'updated_at' => '2019-08-22 17:17:04',
            ),
            118 => 
            array (
                'id' => 244,
                'code' => 'NC/SEC/26',
                'user_id' => 399,
                'school_id' => 22,
                'group_id' => 57,
                'created_at' => '2019-08-22 17:17:05',
                'updated_at' => '2019-08-22 17:17:05',
            ),
            119 => 
            array (
                'id' => 245,
                'code' => 'NC/SEC/27',
                'user_id' => 400,
                'school_id' => 22,
                'group_id' => 57,
                'created_at' => '2019-08-22 17:17:05',
                'updated_at' => '2019-08-22 17:17:05',
            ),
            120 => 
            array (
                'id' => 246,
                'code' => 'NC/SEC/28',
                'user_id' => 401,
                'school_id' => 22,
                'group_id' => 57,
                'created_at' => '2019-08-22 17:17:05',
                'updated_at' => '2019-08-22 17:17:05',
            ),
            121 => 
            array (
                'id' => 247,
                'code' => 'NC/SEC/29',
                'user_id' => 402,
                'school_id' => 22,
                'group_id' => 57,
                'created_at' => '2019-08-22 17:17:05',
                'updated_at' => '2019-08-22 17:17:05',
            ),
            122 => 
            array (
                'id' => 249,
                'code' => 'EG-SEC-001',
                'user_id' => 413,
                'school_id' => 13,
                'group_id' => 60,
                'created_at' => '2019-08-26 14:26:35',
                'updated_at' => '2019-08-26 14:26:35',
            ),
            123 => 
            array (
                'id' => 250,
                'code' => 'EG-SEC-002',
                'user_id' => 414,
                'school_id' => 13,
                'group_id' => 60,
                'created_at' => '2019-08-26 14:26:35',
                'updated_at' => '2019-08-26 14:26:35',
            ),
            124 => 
            array (
                'id' => 251,
                'code' => 'EG-SEC-003',
                'user_id' => 415,
                'school_id' => 13,
                'group_id' => 60,
                'created_at' => '2019-08-26 14:26:35',
                'updated_at' => '2019-08-26 14:26:35',
            ),
            125 => 
            array (
                'id' => 252,
                'code' => 'EG-SEC-004',
                'user_id' => 416,
                'school_id' => 13,
                'group_id' => 60,
                'created_at' => '2019-08-26 14:26:35',
                'updated_at' => '2019-08-26 14:26:35',
            ),
            126 => 
            array (
                'id' => 253,
                'code' => 'EG-SEC-005',
                'user_id' => 417,
                'school_id' => 13,
                'group_id' => 60,
                'created_at' => '2019-08-26 14:26:35',
                'updated_at' => '2019-08-26 14:26:35',
            ),
            127 => 
            array (
                'id' => 254,
                'code' => 'EG-SEC-006',
                'user_id' => 418,
                'school_id' => 13,
                'group_id' => 60,
                'created_at' => '2019-08-26 14:26:35',
                'updated_at' => '2019-08-26 14:26:35',
            ),
            128 => 
            array (
                'id' => 255,
                'code' => 'EG-SEC-007',
                'user_id' => 419,
                'school_id' => 13,
                'group_id' => 60,
                'created_at' => '2019-08-26 14:26:36',
                'updated_at' => '2019-08-26 14:26:36',
            ),
            129 => 
            array (
                'id' => 256,
                'code' => 'EG-SEC-008',
                'user_id' => 420,
                'school_id' => 13,
                'group_id' => 60,
                'created_at' => '2019-08-26 14:26:36',
                'updated_at' => '2019-08-26 14:26:36',
            ),
            130 => 
            array (
                'id' => 257,
                'code' => 'EG-SEC-009',
                'user_id' => 421,
                'school_id' => 13,
                'group_id' => 60,
                'created_at' => '2019-08-26 14:26:36',
                'updated_at' => '2019-08-26 14:26:36',
            ),
            131 => 
            array (
                'id' => 258,
                'code' => 'EG-SEC-010',
                'user_id' => 422,
                'school_id' => 13,
                'group_id' => 60,
                'created_at' => '2019-08-26 14:26:36',
                'updated_at' => '2019-08-26 14:26:36',
            ),
            132 => 
            array (
                'id' => 259,
                'code' => 'EG-SEC-011',
                'user_id' => 423,
                'school_id' => 13,
                'group_id' => 60,
                'created_at' => '2019-08-26 14:26:36',
                'updated_at' => '2019-08-26 14:26:36',
            ),
            133 => 
            array (
                'id' => 260,
                'code' => 'EG-SEC-012',
                'user_id' => 424,
                'school_id' => 13,
                'group_id' => 60,
                'created_at' => '2019-08-26 14:26:36',
                'updated_at' => '2019-08-26 14:26:36',
            ),
            134 => 
            array (
                'id' => 261,
                'code' => 'EG-SEC-013',
                'user_id' => 425,
                'school_id' => 13,
                'group_id' => 60,
                'created_at' => '2019-08-26 14:26:36',
                'updated_at' => '2019-08-26 14:26:36',
            ),
            135 => 
            array (
                'id' => 262,
                'code' => 'EG-SEC-014',
                'user_id' => 426,
                'school_id' => 13,
                'group_id' => 60,
                'created_at' => '2019-08-26 14:26:36',
                'updated_at' => '2019-08-26 14:26:36',
            ),
            136 => 
            array (
                'id' => 263,
                'code' => 'EG-SEC-015',
                'user_id' => 427,
                'school_id' => 13,
                'group_id' => 60,
                'created_at' => '2019-08-26 14:26:37',
                'updated_at' => '2019-08-26 14:26:37',
            ),
            137 => 
            array (
                'id' => 264,
                'code' => 'EG-SEC-016',
                'user_id' => 428,
                'school_id' => 13,
                'group_id' => 60,
                'created_at' => '2019-08-26 14:26:37',
                'updated_at' => '2019-08-26 14:26:37',
            ),
            138 => 
            array (
                'id' => 265,
                'code' => 'EG-SEC-017',
                'user_id' => 429,
                'school_id' => 13,
                'group_id' => 60,
                'created_at' => '2019-08-26 14:26:37',
                'updated_at' => '2019-08-26 14:26:37',
            ),
            139 => 
            array (
                'id' => 266,
                'code' => 'EG-SEC-018',
                'user_id' => 430,
                'school_id' => 13,
                'group_id' => 60,
                'created_at' => '2019-08-26 14:26:37',
                'updated_at' => '2019-08-26 14:26:37',
            ),
            140 => 
            array (
                'id' => 267,
                'code' => 'EG-SEC-019',
                'user_id' => 431,
                'school_id' => 13,
                'group_id' => 60,
                'created_at' => '2019-08-26 14:26:37',
                'updated_at' => '2019-08-26 14:26:37',
            ),
            141 => 
            array (
                'id' => 268,
                'code' => 'EG-SEC-020',
                'user_id' => 432,
                'school_id' => 13,
                'group_id' => 60,
                'created_at' => '2019-08-26 14:26:37',
                'updated_at' => '2019-08-26 14:26:37',
            ),
            142 => 
            array (
                'id' => 269,
                'code' => 'EG-SEC-021',
                'user_id' => 433,
                'school_id' => 13,
                'group_id' => 60,
                'created_at' => '2019-08-26 14:26:37',
                'updated_at' => '2019-08-26 14:26:37',
            ),
            143 => 
            array (
                'id' => 270,
                'code' => 'EG-SEC-022',
                'user_id' => 434,
                'school_id' => 13,
                'group_id' => 60,
                'created_at' => '2019-08-26 14:26:37',
                'updated_at' => '2019-08-26 14:26:37',
            ),
            144 => 
            array (
                'id' => 271,
                'code' => 'EG-SEC-023',
                'user_id' => 435,
                'school_id' => 13,
                'group_id' => 60,
                'created_at' => '2019-08-26 14:26:37',
                'updated_at' => '2019-08-26 14:26:37',
            ),
            145 => 
            array (
                'id' => 272,
                'code' => 'EG-SEC-024',
                'user_id' => 436,
                'school_id' => 13,
                'group_id' => 60,
                'created_at' => '2019-08-26 14:26:38',
                'updated_at' => '2019-08-26 14:26:38',
            ),
            146 => 
            array (
                'id' => 273,
                'code' => 'EG-SEC-025',
                'user_id' => 437,
                'school_id' => 13,
                'group_id' => 60,
                'created_at' => '2019-08-26 14:26:38',
                'updated_at' => '2019-08-26 14:26:38',
            ),
            147 => 
            array (
                'id' => 274,
                'code' => 'EG-SEC-026',
                'user_id' => 438,
                'school_id' => 13,
                'group_id' => 60,
                'created_at' => '2019-08-26 14:26:38',
                'updated_at' => '2019-08-26 14:26:38',
            ),
            148 => 
            array (
                'id' => 275,
                'code' => 'EG-SEC-027',
                'user_id' => 439,
                'school_id' => 13,
                'group_id' => 61,
                'created_at' => '2019-08-26 14:48:00',
                'updated_at' => '2019-08-26 14:48:00',
            ),
            149 => 
            array (
                'id' => 276,
                'code' => 'EG-SEC-028',
                'user_id' => 440,
                'school_id' => 13,
                'group_id' => 61,
                'created_at' => '2019-08-26 14:48:00',
                'updated_at' => '2019-08-26 14:48:00',
            ),
            150 => 
            array (
                'id' => 277,
                'code' => 'EG-SEC-029',
                'user_id' => 441,
                'school_id' => 13,
                'group_id' => 61,
                'created_at' => '2019-08-26 14:48:00',
                'updated_at' => '2019-08-26 14:48:00',
            ),
            151 => 
            array (
                'id' => 278,
                'code' => 'EG-SEC-030',
                'user_id' => 442,
                'school_id' => 13,
                'group_id' => 61,
                'created_at' => '2019-08-26 14:48:00',
                'updated_at' => '2019-08-26 14:48:00',
            ),
            152 => 
            array (
                'id' => 279,
                'code' => 'EG-SEC-031',
                'user_id' => 443,
                'school_id' => 13,
                'group_id' => 61,
                'created_at' => '2019-08-26 14:48:00',
                'updated_at' => '2019-08-26 14:48:00',
            ),
            153 => 
            array (
                'id' => 280,
                'code' => 'EG-SEC-032',
                'user_id' => 444,
                'school_id' => 13,
                'group_id' => 61,
                'created_at' => '2019-08-26 14:48:01',
                'updated_at' => '2019-08-26 14:48:01',
            ),
            154 => 
            array (
                'id' => 281,
                'code' => 'EG-SEC-033',
                'user_id' => 445,
                'school_id' => 13,
                'group_id' => 61,
                'created_at' => '2019-08-26 14:48:01',
                'updated_at' => '2019-08-26 14:48:01',
            ),
            155 => 
            array (
                'id' => 282,
                'code' => 'EG-SEC-034',
                'user_id' => 446,
                'school_id' => 13,
                'group_id' => 61,
                'created_at' => '2019-08-26 14:48:01',
                'updated_at' => '2019-08-26 14:48:01',
            ),
            156 => 
            array (
                'id' => 283,
                'code' => 'EG-SEC-035',
                'user_id' => 447,
                'school_id' => 13,
                'group_id' => 61,
                'created_at' => '2019-08-26 14:48:01',
                'updated_at' => '2019-08-26 14:48:01',
            ),
            157 => 
            array (
                'id' => 284,
                'code' => 'EG-SEC-036',
                'user_id' => 448,
                'school_id' => 13,
                'group_id' => 61,
                'created_at' => '2019-08-26 14:48:01',
                'updated_at' => '2019-08-26 14:48:01',
            ),
            158 => 
            array (
                'id' => 285,
                'code' => 'EG-SEC-037',
                'user_id' => 449,
                'school_id' => 13,
                'group_id' => 61,
                'created_at' => '2019-08-26 14:48:01',
                'updated_at' => '2019-08-26 14:48:01',
            ),
            159 => 
            array (
                'id' => 286,
                'code' => 'EG-SEC-038',
                'user_id' => 450,
                'school_id' => 13,
                'group_id' => 61,
                'created_at' => '2019-08-26 14:48:01',
                'updated_at' => '2019-08-26 14:48:01',
            ),
            160 => 
            array (
                'id' => 287,
                'code' => 'EG-SEC-039',
                'user_id' => 451,
                'school_id' => 13,
                'group_id' => 61,
                'created_at' => '2019-08-26 14:48:01',
                'updated_at' => '2019-08-26 14:48:01',
            ),
            161 => 
            array (
                'id' => 288,
                'code' => 'EG-SEC-040',
                'user_id' => 452,
                'school_id' => 13,
                'group_id' => 61,
                'created_at' => '2019-08-26 14:48:02',
                'updated_at' => '2019-08-26 14:48:02',
            ),
            162 => 
            array (
                'id' => 289,
                'code' => 'EG-SEC-041',
                'user_id' => 453,
                'school_id' => 13,
                'group_id' => 61,
                'created_at' => '2019-08-26 14:48:02',
                'updated_at' => '2019-08-26 14:48:02',
            ),
            163 => 
            array (
                'id' => 290,
                'code' => 'EG-SEC-042',
                'user_id' => 454,
                'school_id' => 13,
                'group_id' => 61,
                'created_at' => '2019-08-26 14:48:02',
                'updated_at' => '2019-08-26 14:48:02',
            ),
            164 => 
            array (
                'id' => 291,
                'code' => 'EG-SEC-043',
                'user_id' => 455,
                'school_id' => 13,
                'group_id' => 61,
                'created_at' => '2019-08-26 14:48:02',
                'updated_at' => '2019-08-26 14:48:02',
            ),
            165 => 
            array (
                'id' => 292,
                'code' => 'EG-SEC-044',
                'user_id' => 456,
                'school_id' => 13,
                'group_id' => 61,
                'created_at' => '2019-08-26 14:48:02',
                'updated_at' => '2019-08-26 14:48:02',
            ),
            166 => 
            array (
                'id' => 293,
                'code' => 'EG-SEC-045',
                'user_id' => 457,
                'school_id' => 13,
                'group_id' => 61,
                'created_at' => '2019-08-26 14:48:02',
                'updated_at' => '2019-08-26 14:48:02',
            ),
            167 => 
            array (
                'id' => 294,
                'code' => 'EG-SEC-046',
                'user_id' => 458,
                'school_id' => 13,
                'group_id' => 61,
                'created_at' => '2019-08-26 14:48:02',
                'updated_at' => '2019-08-26 14:48:02',
            ),
            168 => 
            array (
                'id' => 295,
                'code' => 'EG-SEC-047',
                'user_id' => 459,
                'school_id' => 13,
                'group_id' => 61,
                'created_at' => '2019-08-26 14:48:02',
                'updated_at' => '2019-08-26 14:48:02',
            ),
            169 => 
            array (
                'id' => 296,
                'code' => 'EG-SEC-048',
                'user_id' => 460,
                'school_id' => 13,
                'group_id' => 61,
                'created_at' => '2019-08-26 14:48:02',
                'updated_at' => '2019-08-26 14:48:02',
            ),
            170 => 
            array (
                'id' => 297,
                'code' => 'EG-SEC-049',
                'user_id' => 461,
                'school_id' => 13,
                'group_id' => 61,
                'created_at' => '2019-08-26 14:48:03',
                'updated_at' => '2019-08-26 14:48:03',
            ),
            171 => 
            array (
                'id' => 298,
                'code' => 'EG-SEC-050',
                'user_id' => 462,
                'school_id' => 13,
                'group_id' => 61,
                'created_at' => '2019-08-26 14:48:03',
                'updated_at' => '2019-08-26 14:48:03',
            ),
            172 => 
            array (
                'id' => 299,
                'code' => 'EG-SEC-051',
                'user_id' => 463,
                'school_id' => 13,
                'group_id' => 61,
                'created_at' => '2019-08-26 14:48:03',
                'updated_at' => '2019-08-26 14:48:03',
            ),
            173 => 
            array (
                'id' => 300,
                'code' => 'EG-SEC-052',
                'user_id' => 464,
                'school_id' => 13,
                'group_id' => 61,
                'created_at' => '2019-08-26 14:48:03',
                'updated_at' => '2019-08-26 14:48:03',
            ),
            174 => 
            array (
                'id' => 301,
                'code' => 'EG-SEC-053',
                'user_id' => 465,
                'school_id' => 13,
                'group_id' => 62,
                'created_at' => '2019-08-26 14:48:03',
                'updated_at' => '2019-08-26 14:48:03',
            ),
            175 => 
            array (
                'id' => 302,
                'code' => 'EG-SEC-054',
                'user_id' => 466,
                'school_id' => 13,
                'group_id' => 63,
                'created_at' => '2019-08-26 15:44:48',
                'updated_at' => '2019-08-26 15:44:48',
            ),
            176 => 
            array (
                'id' => 303,
                'code' => 'EG-SEC-055',
                'user_id' => 467,
                'school_id' => 13,
                'group_id' => 63,
                'created_at' => '2019-08-26 15:44:48',
                'updated_at' => '2019-08-26 15:44:48',
            ),
            177 => 
            array (
                'id' => 304,
                'code' => 'EG-SEC-056',
                'user_id' => 468,
                'school_id' => 13,
                'group_id' => 63,
                'created_at' => '2019-08-26 15:44:48',
                'updated_at' => '2019-08-26 15:44:48',
            ),
            178 => 
            array (
                'id' => 305,
                'code' => 'EG-SEC-057',
                'user_id' => 469,
                'school_id' => 13,
                'group_id' => 63,
                'created_at' => '2019-08-26 15:44:48',
                'updated_at' => '2019-08-26 15:44:48',
            ),
            179 => 
            array (
                'id' => 306,
                'code' => 'EG-SEC-058',
                'user_id' => 470,
                'school_id' => 13,
                'group_id' => 63,
                'created_at' => '2019-08-26 15:44:48',
                'updated_at' => '2019-08-26 15:44:48',
            ),
            180 => 
            array (
                'id' => 307,
                'code' => 'EG-SEC-059',
                'user_id' => 471,
                'school_id' => 13,
                'group_id' => 63,
                'created_at' => '2019-08-26 15:44:48',
                'updated_at' => '2019-08-26 15:44:48',
            ),
            181 => 
            array (
                'id' => 308,
                'code' => 'EG-SEC-060',
                'user_id' => 472,
                'school_id' => 13,
                'group_id' => 63,
                'created_at' => '2019-08-26 15:44:48',
                'updated_at' => '2019-08-26 15:44:48',
            ),
            182 => 
            array (
                'id' => 309,
                'code' => 'EG-SEC-061',
                'user_id' => 473,
                'school_id' => 13,
                'group_id' => 63,
                'created_at' => '2019-08-26 15:44:48',
                'updated_at' => '2019-08-26 15:44:48',
            ),
            183 => 
            array (
                'id' => 310,
                'code' => 'EG-SEC-062',
                'user_id' => 474,
                'school_id' => 13,
                'group_id' => 63,
                'created_at' => '2019-08-26 15:44:49',
                'updated_at' => '2019-08-26 15:44:49',
            ),
            184 => 
            array (
                'id' => 311,
                'code' => 'EG-SEC-063',
                'user_id' => 475,
                'school_id' => 13,
                'group_id' => 63,
                'created_at' => '2019-08-26 15:44:49',
                'updated_at' => '2019-08-26 15:44:49',
            ),
            185 => 
            array (
                'id' => 312,
                'code' => 'EG-SEC-064',
                'user_id' => 476,
                'school_id' => 13,
                'group_id' => 63,
                'created_at' => '2019-08-26 15:44:49',
                'updated_at' => '2019-08-26 15:44:49',
            ),
            186 => 
            array (
                'id' => 313,
                'code' => 'EG-SEC-065',
                'user_id' => 477,
                'school_id' => 13,
                'group_id' => 63,
                'created_at' => '2019-08-26 15:44:49',
                'updated_at' => '2019-08-26 15:44:49',
            ),
            187 => 
            array (
                'id' => 314,
                'code' => 'EG-SEC-066',
                'user_id' => 478,
                'school_id' => 13,
                'group_id' => 63,
                'created_at' => '2019-08-26 15:44:50',
                'updated_at' => '2019-08-26 15:44:50',
            ),
            188 => 
            array (
                'id' => 315,
                'code' => 'EG-SEC-067',
                'user_id' => 479,
                'school_id' => 13,
                'group_id' => 63,
                'created_at' => '2019-08-26 15:44:50',
                'updated_at' => '2019-08-26 15:44:50',
            ),
            189 => 
            array (
                'id' => 316,
                'code' => 'EG-SEC-068',
                'user_id' => 480,
                'school_id' => 13,
                'group_id' => 63,
                'created_at' => '2019-08-26 15:44:50',
                'updated_at' => '2019-08-26 15:44:50',
            ),
            190 => 
            array (
                'id' => 317,
                'code' => 'EG-SEC-069',
                'user_id' => 481,
                'school_id' => 13,
                'group_id' => 63,
                'created_at' => '2019-08-26 15:44:50',
                'updated_at' => '2019-08-26 15:44:50',
            ),
            191 => 
            array (
                'id' => 318,
                'code' => 'EG-SEC-070',
                'user_id' => 482,
                'school_id' => 13,
                'group_id' => 63,
                'created_at' => '2019-08-26 15:44:51',
                'updated_at' => '2019-08-26 15:44:51',
            ),
            192 => 
            array (
                'id' => 319,
                'code' => 'EG-SEC-071',
                'user_id' => 483,
                'school_id' => 13,
                'group_id' => 63,
                'created_at' => '2019-08-26 15:44:51',
                'updated_at' => '2019-08-26 15:44:51',
            ),
            193 => 
            array (
                'id' => 320,
                'code' => 'EG-SEC-072',
                'user_id' => 484,
                'school_id' => 13,
                'group_id' => 63,
                'created_at' => '2019-08-26 15:44:51',
                'updated_at' => '2019-08-26 15:44:51',
            ),
            194 => 
            array (
                'id' => 321,
                'code' => 'EG-SEC-073',
                'user_id' => 485,
                'school_id' => 13,
                'group_id' => 63,
                'created_at' => '2019-08-26 15:44:51',
                'updated_at' => '2019-08-26 15:44:51',
            ),
            195 => 
            array (
                'id' => 322,
                'code' => 'EG-SEC-074',
                'user_id' => 486,
                'school_id' => 13,
                'group_id' => 63,
                'created_at' => '2019-08-26 15:44:52',
                'updated_at' => '2019-08-26 15:44:52',
            ),
            196 => 
            array (
                'id' => 323,
                'code' => 'EG-SEC-075',
                'user_id' => 487,
                'school_id' => 13,
                'group_id' => 63,
                'created_at' => '2019-08-26 15:44:52',
                'updated_at' => '2019-08-26 15:44:52',
            ),
            197 => 
            array (
                'id' => 324,
                'code' => 'EG-SEC-076',
                'user_id' => 488,
                'school_id' => 13,
                'group_id' => 63,
                'created_at' => '2019-08-26 15:44:52',
                'updated_at' => '2019-08-26 15:44:52',
            ),
            198 => 
            array (
                'id' => 325,
                'code' => 'EG-SEC-077',
                'user_id' => 489,
                'school_id' => 13,
                'group_id' => 63,
                'created_at' => '2019-08-26 15:44:52',
                'updated_at' => '2019-08-26 15:44:52',
            ),
            199 => 
            array (
                'id' => 326,
                'code' => 'EG-SEC-078',
                'user_id' => 490,
                'school_id' => 13,
                'group_id' => 63,
                'created_at' => '2019-08-26 15:44:53',
                'updated_at' => '2019-08-26 15:44:53',
            ),
            200 => 
            array (
                'id' => 327,
                'code' => 'EG-SEC-079',
                'user_id' => 491,
                'school_id' => 13,
                'group_id' => 63,
                'created_at' => '2019-08-26 15:44:53',
                'updated_at' => '2019-08-26 15:44:53',
            ),
            201 => 
            array (
                'id' => 328,
                'code' => 'EG-SEC-107',
                'user_id' => 492,
                'school_id' => 13,
                'group_id' => 64,
                'created_at' => '2019-08-26 15:44:53',
                'updated_at' => '2019-08-26 18:56:57',
            ),
            202 => 
            array (
                'id' => 329,
                'code' => 'EG-SEC-081',
                'user_id' => 493,
                'school_id' => 13,
                'group_id' => 64,
                'created_at' => '2019-08-26 18:56:54',
                'updated_at' => '2019-08-26 18:56:54',
            ),
            203 => 
            array (
                'id' => 330,
                'code' => 'EG-SEC-082',
                'user_id' => 494,
                'school_id' => 13,
                'group_id' => 64,
                'created_at' => '2019-08-26 18:56:54',
                'updated_at' => '2019-08-26 18:56:54',
            ),
            204 => 
            array (
                'id' => 331,
                'code' => 'EG-SEC-083',
                'user_id' => 495,
                'school_id' => 13,
                'group_id' => 64,
                'created_at' => '2019-08-26 18:56:54',
                'updated_at' => '2019-08-26 18:56:54',
            ),
            205 => 
            array (
                'id' => 332,
                'code' => 'EG-SEC-084',
                'user_id' => 496,
                'school_id' => 13,
                'group_id' => 64,
                'created_at' => '2019-08-26 18:56:54',
                'updated_at' => '2019-08-26 18:56:54',
            ),
            206 => 
            array (
                'id' => 333,
                'code' => 'EG-SEC-085',
                'user_id' => 497,
                'school_id' => 13,
                'group_id' => 64,
                'created_at' => '2019-08-26 18:56:54',
                'updated_at' => '2019-08-26 18:56:54',
            ),
            207 => 
            array (
                'id' => 334,
                'code' => 'EG-SEC-086',
                'user_id' => 498,
                'school_id' => 13,
                'group_id' => 64,
                'created_at' => '2019-08-26 18:56:54',
                'updated_at' => '2019-08-26 18:56:54',
            ),
            208 => 
            array (
                'id' => 335,
                'code' => 'EG-SEC-087',
                'user_id' => 499,
                'school_id' => 13,
                'group_id' => 64,
                'created_at' => '2019-08-26 18:56:54',
                'updated_at' => '2019-08-26 18:56:54',
            ),
            209 => 
            array (
                'id' => 336,
                'code' => 'EG-SEC-088',
                'user_id' => 500,
                'school_id' => 13,
                'group_id' => 64,
                'created_at' => '2019-08-26 18:56:55',
                'updated_at' => '2019-08-26 18:56:55',
            ),
            210 => 
            array (
                'id' => 337,
                'code' => 'EG-SEC-089',
                'user_id' => 501,
                'school_id' => 13,
                'group_id' => 64,
                'created_at' => '2019-08-26 18:56:55',
                'updated_at' => '2019-08-26 18:56:55',
            ),
            211 => 
            array (
                'id' => 338,
                'code' => 'EG-SEC-090',
                'user_id' => 502,
                'school_id' => 13,
                'group_id' => 64,
                'created_at' => '2019-08-26 18:56:55',
                'updated_at' => '2019-08-26 18:56:55',
            ),
            212 => 
            array (
                'id' => 339,
                'code' => 'EG-SEC-091',
                'user_id' => 503,
                'school_id' => 13,
                'group_id' => 64,
                'created_at' => '2019-08-26 18:56:55',
                'updated_at' => '2019-08-26 18:56:55',
            ),
            213 => 
            array (
                'id' => 340,
                'code' => 'EG-SEC-092',
                'user_id' => 504,
                'school_id' => 13,
                'group_id' => 64,
                'created_at' => '2019-08-26 18:56:55',
                'updated_at' => '2019-08-26 18:56:55',
            ),
            214 => 
            array (
                'id' => 341,
                'code' => 'EG-SEC-093',
                'user_id' => 505,
                'school_id' => 13,
                'group_id' => 64,
                'created_at' => '2019-08-26 18:56:55',
                'updated_at' => '2019-08-26 18:56:55',
            ),
            215 => 
            array (
                'id' => 342,
                'code' => 'EG-SEC-094',
                'user_id' => 506,
                'school_id' => 13,
                'group_id' => 64,
                'created_at' => '2019-08-26 18:56:55',
                'updated_at' => '2019-08-26 18:56:55',
            ),
            216 => 
            array (
                'id' => 343,
                'code' => 'EG-SEC-095',
                'user_id' => 507,
                'school_id' => 13,
                'group_id' => 64,
                'created_at' => '2019-08-26 18:56:56',
                'updated_at' => '2019-08-26 18:56:56',
            ),
            217 => 
            array (
                'id' => 344,
                'code' => 'EG-SEC-096',
                'user_id' => 508,
                'school_id' => 13,
                'group_id' => 64,
                'created_at' => '2019-08-26 18:56:56',
                'updated_at' => '2019-08-26 18:56:56',
            ),
            218 => 
            array (
                'id' => 345,
                'code' => 'EG-SEC-097',
                'user_id' => 509,
                'school_id' => 13,
                'group_id' => 64,
                'created_at' => '2019-08-26 18:56:56',
                'updated_at' => '2019-08-26 18:56:56',
            ),
            219 => 
            array (
                'id' => 346,
                'code' => 'EG-SEC-098',
                'user_id' => 510,
                'school_id' => 13,
                'group_id' => 64,
                'created_at' => '2019-08-26 18:56:56',
                'updated_at' => '2019-08-26 18:56:56',
            ),
            220 => 
            array (
                'id' => 347,
                'code' => 'EG-SEC-099',
                'user_id' => 511,
                'school_id' => 13,
                'group_id' => 64,
                'created_at' => '2019-08-26 18:56:56',
                'updated_at' => '2019-08-26 18:56:56',
            ),
            221 => 
            array (
                'id' => 348,
                'code' => 'EG-SEC-100',
                'user_id' => 512,
                'school_id' => 13,
                'group_id' => 64,
                'created_at' => '2019-08-26 18:56:56',
                'updated_at' => '2019-08-26 18:56:56',
            ),
            222 => 
            array (
                'id' => 349,
                'code' => 'EG-SEC-101',
                'user_id' => 513,
                'school_id' => 13,
                'group_id' => 64,
                'created_at' => '2019-08-26 18:56:57',
                'updated_at' => '2019-08-26 18:56:57',
            ),
            223 => 
            array (
                'id' => 350,
                'code' => 'EG-SEC-102',
                'user_id' => 514,
                'school_id' => 13,
                'group_id' => 64,
                'created_at' => '2019-08-26 18:56:57',
                'updated_at' => '2019-08-26 18:56:57',
            ),
            224 => 
            array (
                'id' => 351,
                'code' => 'EG-SEC-103',
                'user_id' => 515,
                'school_id' => 13,
                'group_id' => 64,
                'created_at' => '2019-08-26 18:56:57',
                'updated_at' => '2019-08-26 18:56:57',
            ),
            225 => 
            array (
                'id' => 352,
                'code' => 'EG-SEC-104',
                'user_id' => 516,
                'school_id' => 13,
                'group_id' => 64,
                'created_at' => '2019-08-26 18:56:57',
                'updated_at' => '2019-08-26 18:56:57',
            ),
            226 => 
            array (
                'id' => 353,
                'code' => 'EG-SEC-105',
                'user_id' => 517,
                'school_id' => 13,
                'group_id' => 64,
                'created_at' => '2019-08-26 18:56:57',
                'updated_at' => '2019-08-26 18:56:57',
            ),
            227 => 
            array (
                'id' => 354,
                'code' => 'EG-SEC-106',
                'user_id' => 518,
                'school_id' => 13,
                'group_id' => 64,
                'created_at' => '2019-08-26 18:56:57',
                'updated_at' => '2019-08-26 18:56:57',
            ),
            228 => 
            array (
                'id' => 372,
                'code' => 'LX-PA-002',
                'user_id' => 541,
                'school_id' => 6,
                'group_id' => 30,
                'created_at' => '2019-08-29 19:21:14',
                'updated_at' => '2019-08-29 19:21:14',
            ),
            229 => 
            array (
                'id' => 373,
                'code' => 'LX-PA-004',
                'user_id' => 543,
                'school_id' => 6,
                'group_id' => 30,
                'created_at' => '2019-08-29 19:39:41',
                'updated_at' => '2019-08-29 19:39:41',
            ),
            230 => 
            array (
                'id' => 374,
                'code' => 'LX-PA-007',
                'user_id' => 544,
                'school_id' => 6,
                'group_id' => 30,
                'created_at' => '2019-08-29 19:40:24',
                'updated_at' => '2019-08-29 19:40:24',
            ),
            231 => 
            array (
                'id' => 375,
                'code' => 'LX-PA-008',
                'user_id' => 545,
                'school_id' => 6,
                'group_id' => 30,
                'created_at' => '2019-08-29 19:40:51',
                'updated_at' => '2019-08-29 19:40:51',
            ),
            232 => 
            array (
                'id' => 376,
                'code' => 'LX-PA-011',
                'user_id' => 547,
                'school_id' => 6,
                'group_id' => 30,
                'created_at' => '2019-08-29 19:41:33',
                'updated_at' => '2019-08-29 19:41:33',
            ),
            233 => 
            array (
                'id' => 377,
                'code' => 'LX-PA-014',
                'user_id' => 549,
                'school_id' => 6,
                'group_id' => 30,
                'created_at' => '2019-08-29 19:41:58',
                'updated_at' => '2019-08-29 19:41:58',
            ),
            234 => 
            array (
                'id' => 378,
                'code' => 'LX-PA-015',
                'user_id' => 550,
                'school_id' => 6,
                'group_id' => 30,
                'created_at' => '2019-08-29 19:42:44',
                'updated_at' => '2019-08-29 19:42:44',
            ),
            235 => 
            array (
                'id' => 379,
                'code' => 'LX-PA-023',
                'user_id' => 551,
                'school_id' => 6,
                'group_id' => 30,
                'created_at' => '2019-08-29 19:43:19',
                'updated_at' => '2019-08-29 19:43:19',
            ),
            236 => 
            array (
                'id' => 380,
                'code' => 'LX-PA-024',
                'user_id' => 552,
                'school_id' => 6,
                'group_id' => 30,
                'created_at' => '2019-08-29 19:43:46',
                'updated_at' => '2019-08-29 19:43:46',
            ),
            237 => 
            array (
                'id' => 381,
                'code' => 'LX-PA-025',
                'user_id' => 553,
                'school_id' => 6,
                'group_id' => 30,
                'created_at' => '2019-08-29 19:44:15',
                'updated_at' => '2019-08-29 19:44:15',
            ),
            238 => 
            array (
                'id' => 382,
                'code' => 'LX-PA-026',
                'user_id' => 554,
                'school_id' => 6,
                'group_id' => 30,
                'created_at' => '2019-08-29 19:44:46',
                'updated_at' => '2019-08-29 19:44:46',
            ),
            239 => 
            array (
                'id' => 383,
                'code' => 'LX-PA-027',
                'user_id' => 555,
                'school_id' => 6,
                'group_id' => 30,
                'created_at' => '2019-08-29 19:45:10',
                'updated_at' => '2019-08-29 19:45:10',
            ),
            240 => 
            array (
                'id' => 384,
                'code' => 'LX-PA-028',
                'user_id' => 556,
                'school_id' => 6,
                'group_id' => 30,
                'created_at' => '2019-08-29 19:45:39',
                'updated_at' => '2019-08-29 19:45:39',
            ),
            241 => 
            array (
                'id' => 385,
                'code' => 'LX-PA-029',
                'user_id' => 557,
                'school_id' => 6,
                'group_id' => 30,
                'created_at' => '2019-08-29 19:46:07',
                'updated_at' => '2019-08-29 19:46:07',
            ),
            242 => 
            array (
                'id' => 386,
                'code' => 'LX-PA-031',
                'user_id' => 558,
                'school_id' => 6,
                'group_id' => 30,
                'created_at' => '2019-08-29 19:46:27',
                'updated_at' => '2019-08-29 19:46:27',
            ),
            243 => 
            array (
                'id' => 388,
                'code' => 'VF/SEC/000',
                'user_id' => 561,
                'school_id' => 40,
                'group_id' => 82,
                'created_at' => '2019-09-02 20:08:11',
                'updated_at' => '2019-09-02 20:08:11',
            ),
            244 => 
            array (
                'id' => 389,
                'code' => 'VF/SEC/001',
                'user_id' => 562,
                'school_id' => 40,
                'group_id' => 82,
                'created_at' => '2019-09-02 20:08:11',
                'updated_at' => '2019-09-02 20:08:11',
            ),
            245 => 
            array (
                'id' => 390,
                'code' => 'VF/SEC/002',
                'user_id' => 563,
                'school_id' => 40,
                'group_id' => 82,
                'created_at' => '2019-09-02 20:08:11',
                'updated_at' => '2019-09-02 20:08:11',
            ),
            246 => 
            array (
                'id' => 391,
                'code' => 'VF/SEC/003',
                'user_id' => 564,
                'school_id' => 40,
                'group_id' => 82,
                'created_at' => '2019-09-02 20:08:12',
                'updated_at' => '2019-09-02 20:08:12',
            ),
            247 => 
            array (
                'id' => 392,
                'code' => 'VF/SEC/004',
                'user_id' => 565,
                'school_id' => 40,
                'group_id' => 82,
                'created_at' => '2019-09-02 20:08:12',
                'updated_at' => '2019-09-02 20:08:12',
            ),
            248 => 
            array (
                'id' => 393,
                'code' => 'VF/SEC/005',
                'user_id' => 566,
                'school_id' => 40,
                'group_id' => 82,
                'created_at' => '2019-09-02 20:08:12',
                'updated_at' => '2019-09-02 20:08:12',
            ),
            249 => 
            array (
                'id' => 394,
                'code' => 'VF/SEC/006',
                'user_id' => 567,
                'school_id' => 40,
                'group_id' => 82,
                'created_at' => '2019-09-02 20:08:12',
                'updated_at' => '2019-09-02 20:08:12',
            ),
            250 => 
            array (
                'id' => 395,
                'code' => 'VF/SEC/007',
                'user_id' => 568,
                'school_id' => 40,
                'group_id' => 82,
                'created_at' => '2019-09-02 20:08:12',
                'updated_at' => '2019-09-02 20:08:12',
            ),
            251 => 
            array (
                'id' => 396,
                'code' => 'VF/SEC/008',
                'user_id' => 569,
                'school_id' => 40,
                'group_id' => 82,
                'created_at' => '2019-09-02 20:08:12',
                'updated_at' => '2019-09-02 20:08:12',
            ),
            252 => 
            array (
                'id' => 397,
                'code' => 'VF/SEC/009',
                'user_id' => 570,
                'school_id' => 40,
                'group_id' => 82,
                'created_at' => '2019-09-02 20:08:12',
                'updated_at' => '2019-09-02 20:08:12',
            ),
            253 => 
            array (
                'id' => 398,
                'code' => 'VF/SEC/010',
                'user_id' => 571,
                'school_id' => 40,
                'group_id' => 82,
                'created_at' => '2019-09-02 20:08:13',
                'updated_at' => '2019-09-02 20:08:13',
            ),
            254 => 
            array (
                'id' => 399,
                'code' => 'VF/SEC/011',
                'user_id' => 572,
                'school_id' => 40,
                'group_id' => 82,
                'created_at' => '2019-09-02 20:08:13',
                'updated_at' => '2019-09-02 20:08:13',
            ),
            255 => 
            array (
                'id' => 400,
                'code' => 'VF/SEC/012',
                'user_id' => 573,
                'school_id' => 40,
                'group_id' => 82,
                'created_at' => '2019-09-02 20:08:13',
                'updated_at' => '2019-09-02 20:08:13',
            ),
            256 => 
            array (
                'id' => 401,
                'code' => 'VF/SEC/013',
                'user_id' => 574,
                'school_id' => 40,
                'group_id' => 82,
                'created_at' => '2019-09-02 20:08:13',
                'updated_at' => '2019-09-02 20:08:13',
            ),
            257 => 
            array (
                'id' => 402,
                'code' => 'VF/SEC/014',
                'user_id' => 575,
                'school_id' => 40,
                'group_id' => 82,
                'created_at' => '2019-09-02 20:08:13',
                'updated_at' => '2019-09-02 20:08:13',
            ),
            258 => 
            array (
                'id' => 403,
                'code' => 'VF/SEC/015',
                'user_id' => 576,
                'school_id' => 40,
                'group_id' => 82,
                'created_at' => '2019-09-02 20:08:13',
                'updated_at' => '2019-09-02 20:08:13',
            ),
            259 => 
            array (
                'id' => 404,
                'code' => 'VF/SEC/016',
                'user_id' => 577,
                'school_id' => 40,
                'group_id' => 82,
                'created_at' => '2019-09-02 20:08:13',
                'updated_at' => '2019-09-02 20:08:13',
            ),
            260 => 
            array (
                'id' => 405,
                'code' => 'VF/SEC/017',
                'user_id' => 578,
                'school_id' => 40,
                'group_id' => 82,
                'created_at' => '2019-09-02 20:08:13',
                'updated_at' => '2019-09-02 20:08:13',
            ),
            261 => 
            array (
                'id' => 406,
                'code' => 'VF/SEC/018',
                'user_id' => 579,
                'school_id' => 40,
                'group_id' => 82,
                'created_at' => '2019-09-02 20:08:14',
                'updated_at' => '2019-09-02 20:08:14',
            ),
            262 => 
            array (
                'id' => 407,
                'code' => 'VF/SEC/019',
                'user_id' => 580,
                'school_id' => 40,
                'group_id' => 82,
                'created_at' => '2019-09-02 20:08:14',
                'updated_at' => '2019-09-02 20:08:14',
            ),
            263 => 
            array (
                'id' => 408,
                'code' => 'VF/SEC/020',
                'user_id' => 581,
                'school_id' => 40,
                'group_id' => 82,
                'created_at' => '2019-09-02 20:08:14',
                'updated_at' => '2019-09-02 20:08:14',
            ),
            264 => 
            array (
                'id' => 409,
                'code' => 'VF/SEC/021',
                'user_id' => 582,
                'school_id' => 40,
                'group_id' => 82,
                'created_at' => '2019-09-02 20:08:14',
                'updated_at' => '2019-09-02 20:08:14',
            ),
            265 => 
            array (
                'id' => 410,
                'code' => 'VF/SEC/022',
                'user_id' => 583,
                'school_id' => 40,
                'group_id' => 82,
                'created_at' => '2019-09-02 20:08:14',
                'updated_at' => '2019-09-02 20:08:14',
            ),
            266 => 
            array (
                'id' => 411,
                'code' => 'VF/SEC/023',
                'user_id' => 584,
                'school_id' => 40,
                'group_id' => 82,
                'created_at' => '2019-09-02 20:08:14',
                'updated_at' => '2019-09-02 20:08:14',
            ),
            267 => 
            array (
                'id' => 412,
                'code' => 'VF/SEC/024',
                'user_id' => 585,
                'school_id' => 40,
                'group_id' => 83,
                'created_at' => '2019-09-02 20:28:21',
                'updated_at' => '2019-09-02 20:28:21',
            ),
            268 => 
            array (
                'id' => 413,
                'code' => 'VF/SEC/025',
                'user_id' => 586,
                'school_id' => 40,
                'group_id' => 83,
                'created_at' => '2019-09-02 20:28:21',
                'updated_at' => '2019-09-02 20:28:21',
            ),
            269 => 
            array (
                'id' => 414,
                'code' => 'VF/SEC/026',
                'user_id' => 587,
                'school_id' => 40,
                'group_id' => 83,
                'created_at' => '2019-09-02 20:28:22',
                'updated_at' => '2019-09-02 20:28:22',
            ),
            270 => 
            array (
                'id' => 415,
                'code' => 'VF/SEC/027',
                'user_id' => 588,
                'school_id' => 40,
                'group_id' => 83,
                'created_at' => '2019-09-02 20:28:22',
                'updated_at' => '2019-09-02 20:28:22',
            ),
            271 => 
            array (
                'id' => 416,
                'code' => 'VF/SEC/028',
                'user_id' => 589,
                'school_id' => 40,
                'group_id' => 83,
                'created_at' => '2019-09-02 20:28:22',
                'updated_at' => '2019-09-02 20:28:22',
            ),
            272 => 
            array (
                'id' => 417,
                'code' => 'VF/SEC/029',
                'user_id' => 590,
                'school_id' => 40,
                'group_id' => 83,
                'created_at' => '2019-09-02 20:28:22',
                'updated_at' => '2019-09-02 20:28:22',
            ),
            273 => 
            array (
                'id' => 418,
                'code' => 'VF/SEC/030',
                'user_id' => 591,
                'school_id' => 40,
                'group_id' => 83,
                'created_at' => '2019-09-02 20:28:22',
                'updated_at' => '2019-09-02 20:28:22',
            ),
            274 => 
            array (
                'id' => 419,
                'code' => 'VF/SEC/031',
                'user_id' => 592,
                'school_id' => 40,
                'group_id' => 83,
                'created_at' => '2019-09-02 20:28:22',
                'updated_at' => '2019-09-02 20:28:22',
            ),
            275 => 
            array (
                'id' => 420,
                'code' => 'VF/SEC/032',
                'user_id' => 593,
                'school_id' => 40,
                'group_id' => 83,
                'created_at' => '2019-09-02 20:28:22',
                'updated_at' => '2019-09-02 20:28:22',
            ),
            276 => 
            array (
                'id' => 421,
                'code' => 'VF/SEC/033',
                'user_id' => 594,
                'school_id' => 40,
                'group_id' => 83,
                'created_at' => '2019-09-02 20:28:22',
                'updated_at' => '2019-09-02 20:28:22',
            ),
            277 => 
            array (
                'id' => 422,
                'code' => 'VF/SEC/034',
                'user_id' => 595,
                'school_id' => 40,
                'group_id' => 83,
                'created_at' => '2019-09-02 20:28:22',
                'updated_at' => '2019-09-02 20:28:22',
            ),
            278 => 
            array (
                'id' => 423,
                'code' => 'VF/SEC/035',
                'user_id' => 596,
                'school_id' => 40,
                'group_id' => 83,
                'created_at' => '2019-09-02 20:28:23',
                'updated_at' => '2019-09-02 20:28:23',
            ),
            279 => 
            array (
                'id' => 424,
                'code' => 'VF/SEC/036',
                'user_id' => 597,
                'school_id' => 40,
                'group_id' => 83,
                'created_at' => '2019-09-02 20:28:23',
                'updated_at' => '2019-09-02 20:28:23',
            ),
            280 => 
            array (
                'id' => 425,
                'code' => 'VF/SEC/037',
                'user_id' => 598,
                'school_id' => 40,
                'group_id' => 83,
                'created_at' => '2019-09-02 20:28:23',
                'updated_at' => '2019-09-02 20:28:23',
            ),
            281 => 
            array (
                'id' => 426,
                'code' => 'VF/SEC/038',
                'user_id' => 599,
                'school_id' => 40,
                'group_id' => 83,
                'created_at' => '2019-09-02 20:28:23',
                'updated_at' => '2019-09-02 20:28:23',
            ),
            282 => 
            array (
                'id' => 427,
                'code' => 'VF/SEC/039',
                'user_id' => 600,
                'school_id' => 40,
                'group_id' => 83,
                'created_at' => '2019-09-02 20:28:23',
                'updated_at' => '2019-09-02 20:28:23',
            ),
            283 => 
            array (
                'id' => 428,
                'code' => 'VF/SEC/040',
                'user_id' => 601,
                'school_id' => 40,
                'group_id' => 83,
                'created_at' => '2019-09-02 20:28:23',
                'updated_at' => '2019-09-02 20:28:23',
            ),
            284 => 
            array (
                'id' => 429,
                'code' => 'VF/SEC/041',
                'user_id' => 602,
                'school_id' => 40,
                'group_id' => 83,
                'created_at' => '2019-09-02 20:28:23',
                'updated_at' => '2019-09-02 20:28:23',
            ),
            285 => 
            array (
                'id' => 430,
                'code' => 'VF/SEC/042',
                'user_id' => 603,
                'school_id' => 40,
                'group_id' => 83,
                'created_at' => '2019-09-02 20:28:23',
                'updated_at' => '2019-09-02 20:28:23',
            ),
            286 => 
            array (
                'id' => 431,
                'code' => 'VF/SEC/043',
                'user_id' => 604,
                'school_id' => 40,
                'group_id' => 83,
                'created_at' => '2019-09-02 20:28:24',
                'updated_at' => '2019-09-02 20:28:24',
            ),
            287 => 
            array (
                'id' => 432,
                'code' => 'VF/SEC/044',
                'user_id' => 605,
                'school_id' => 40,
                'group_id' => 83,
                'created_at' => '2019-09-02 20:28:24',
                'updated_at' => '2019-09-02 20:28:24',
            ),
            288 => 
            array (
                'id' => 433,
                'code' => 'VF/SEC/045',
                'user_id' => 606,
                'school_id' => 40,
                'group_id' => 83,
                'created_at' => '2019-09-02 20:28:24',
                'updated_at' => '2019-09-02 20:28:24',
            ),
            289 => 
            array (
                'id' => 434,
                'code' => 'VF/SEC/046',
                'user_id' => 607,
                'school_id' => 40,
                'group_id' => 83,
                'created_at' => '2019-09-02 20:28:24',
                'updated_at' => '2019-09-02 20:28:24',
            ),
            290 => 
            array (
                'id' => 435,
                'code' => 'VF/SEC/047',
                'user_id' => 608,
                'school_id' => 40,
                'group_id' => 83,
                'created_at' => '2019-09-02 20:28:24',
                'updated_at' => '2019-09-02 20:28:24',
            ),
            291 => 
            array (
                'id' => 436,
                'code' => 'VF/SEC/048',
                'user_id' => 609,
                'school_id' => 40,
                'group_id' => 83,
                'created_at' => '2019-09-02 20:28:24',
                'updated_at' => '2019-09-02 20:28:24',
            ),
            292 => 
            array (
                'id' => 437,
                'code' => 'VF/SEC/049',
                'user_id' => 610,
                'school_id' => 40,
                'group_id' => 83,
                'created_at' => '2019-09-02 20:28:24',
                'updated_at' => '2019-09-02 20:28:24',
            ),
            293 => 
            array (
                'id' => 438,
                'code' => 'VF/SEC/050',
                'user_id' => 611,
                'school_id' => 40,
                'group_id' => 84,
                'created_at' => '2019-09-02 20:51:24',
                'updated_at' => '2019-09-02 20:51:24',
            ),
            294 => 
            array (
                'id' => 439,
                'code' => 'VF/SEC/051',
                'user_id' => 612,
                'school_id' => 40,
                'group_id' => 84,
                'created_at' => '2019-09-02 20:51:24',
                'updated_at' => '2019-09-02 20:51:24',
            ),
            295 => 
            array (
                'id' => 440,
                'code' => 'VF/SEC/052',
                'user_id' => 613,
                'school_id' => 40,
                'group_id' => 84,
                'created_at' => '2019-09-02 20:51:24',
                'updated_at' => '2019-09-02 20:51:24',
            ),
            296 => 
            array (
                'id' => 441,
                'code' => 'VF/SEC/053',
                'user_id' => 614,
                'school_id' => 40,
                'group_id' => 84,
                'created_at' => '2019-09-02 20:51:24',
                'updated_at' => '2019-09-02 20:51:24',
            ),
            297 => 
            array (
                'id' => 442,
                'code' => 'VF/SEC/054',
                'user_id' => 615,
                'school_id' => 40,
                'group_id' => 84,
                'created_at' => '2019-09-02 20:51:24',
                'updated_at' => '2019-09-02 20:51:24',
            ),
            298 => 
            array (
                'id' => 443,
                'code' => 'VF/SEC/055',
                'user_id' => 616,
                'school_id' => 40,
                'group_id' => 84,
                'created_at' => '2019-09-02 20:51:24',
                'updated_at' => '2019-09-02 20:51:24',
            ),
            299 => 
            array (
                'id' => 444,
                'code' => 'VF/SEC/056',
                'user_id' => 617,
                'school_id' => 40,
                'group_id' => 84,
                'created_at' => '2019-09-02 20:51:24',
                'updated_at' => '2019-09-02 20:51:24',
            ),
            300 => 
            array (
                'id' => 445,
                'code' => 'VF/SEC/057',
                'user_id' => 618,
                'school_id' => 40,
                'group_id' => 84,
                'created_at' => '2019-09-02 20:51:25',
                'updated_at' => '2019-09-02 20:51:25',
            ),
            301 => 
            array (
                'id' => 446,
                'code' => 'VF/SEC/058',
                'user_id' => 619,
                'school_id' => 40,
                'group_id' => 84,
                'created_at' => '2019-09-02 20:51:25',
                'updated_at' => '2019-09-02 20:51:25',
            ),
            302 => 
            array (
                'id' => 447,
                'code' => 'VF/SEC/059',
                'user_id' => 620,
                'school_id' => 40,
                'group_id' => 84,
                'created_at' => '2019-09-02 20:51:25',
                'updated_at' => '2019-09-02 20:51:25',
            ),
            303 => 
            array (
                'id' => 448,
                'code' => 'VF/SEC/060',
                'user_id' => 621,
                'school_id' => 40,
                'group_id' => 84,
                'created_at' => '2019-09-02 20:51:25',
                'updated_at' => '2019-09-02 20:51:25',
            ),
            304 => 
            array (
                'id' => 449,
                'code' => 'VF/SEC/061',
                'user_id' => 622,
                'school_id' => 40,
                'group_id' => 84,
                'created_at' => '2019-09-02 20:51:25',
                'updated_at' => '2019-09-02 20:51:25',
            ),
            305 => 
            array (
                'id' => 450,
                'code' => 'VF/SEC/062',
                'user_id' => 623,
                'school_id' => 40,
                'group_id' => 84,
                'created_at' => '2019-09-02 20:51:25',
                'updated_at' => '2019-09-02 20:51:25',
            ),
            306 => 
            array (
                'id' => 451,
                'code' => 'VF/SEC/063',
                'user_id' => 624,
                'school_id' => 40,
                'group_id' => 84,
                'created_at' => '2019-09-02 20:51:25',
                'updated_at' => '2019-09-02 20:51:25',
            ),
            307 => 
            array (
                'id' => 452,
                'code' => 'VF/SEC/064',
                'user_id' => 625,
                'school_id' => 40,
                'group_id' => 84,
                'created_at' => '2019-09-02 20:51:25',
                'updated_at' => '2019-09-02 20:51:25',
            ),
            308 => 
            array (
                'id' => 453,
                'code' => 'VF/SEC/065',
                'user_id' => 626,
                'school_id' => 40,
                'group_id' => 84,
                'created_at' => '2019-09-02 20:51:26',
                'updated_at' => '2019-09-02 20:51:26',
            ),
            309 => 
            array (
                'id' => 454,
                'code' => 'VF/SEC/066',
                'user_id' => 627,
                'school_id' => 40,
                'group_id' => 84,
                'created_at' => '2019-09-02 20:51:26',
                'updated_at' => '2019-09-02 20:51:26',
            ),
            310 => 
            array (
                'id' => 455,
                'code' => 'VF/SEC/067',
                'user_id' => 628,
                'school_id' => 40,
                'group_id' => 84,
                'created_at' => '2019-09-02 20:51:26',
                'updated_at' => '2019-09-02 20:51:26',
            ),
            311 => 
            array (
                'id' => 456,
                'code' => 'VF/SEC/068',
                'user_id' => 629,
                'school_id' => 40,
                'group_id' => 84,
                'created_at' => '2019-09-02 20:51:26',
                'updated_at' => '2019-09-02 20:51:26',
            ),
            312 => 
            array (
                'id' => 457,
                'code' => 'VF/SEC/069',
                'user_id' => 630,
                'school_id' => 40,
                'group_id' => 84,
                'created_at' => '2019-09-02 20:51:26',
                'updated_at' => '2019-09-02 20:51:26',
            ),
            313 => 
            array (
                'id' => 458,
                'code' => 'VF/SEC/070',
                'user_id' => 631,
                'school_id' => 40,
                'group_id' => 84,
                'created_at' => '2019-09-02 20:51:26',
                'updated_at' => '2019-09-02 20:51:26',
            ),
            314 => 
            array (
                'id' => 459,
                'code' => 'VF/SEC/071',
                'user_id' => 632,
                'school_id' => 40,
                'group_id' => 84,
                'created_at' => '2019-09-02 20:51:26',
                'updated_at' => '2019-09-02 20:51:26',
            ),
            315 => 
            array (
                'id' => 460,
                'code' => 'VF/SEC/072',
                'user_id' => 633,
                'school_id' => 40,
                'group_id' => 84,
                'created_at' => '2019-09-02 20:51:26',
                'updated_at' => '2019-09-02 20:51:26',
            ),
            316 => 
            array (
                'id' => 461,
                'code' => 'VF/SEC/073',
                'user_id' => 634,
                'school_id' => 40,
                'group_id' => 84,
                'created_at' => '2019-09-02 20:51:26',
                'updated_at' => '2019-09-02 20:51:26',
            ),
            317 => 
            array (
                'id' => 462,
                'code' => 'VF/SEC/074',
                'user_id' => 635,
                'school_id' => 40,
                'group_id' => 84,
                'created_at' => '2019-09-02 20:51:27',
                'updated_at' => '2019-09-02 20:51:27',
            ),
            318 => 
            array (
                'id' => 500,
                'code' => 'NC/SEC/01',
                'user_id' => 673,
                'school_id' => 3,
                'group_id' => 97,
                'created_at' => '2019-09-02 23:07:58',
                'updated_at' => '2019-09-02 23:07:58',
            ),
            319 => 
            array (
                'id' => 501,
                'code' => 'NC/SEC/02',
                'user_id' => 675,
                'school_id' => 3,
                'group_id' => 97,
                'created_at' => '2019-09-02 23:08:17',
                'updated_at' => '2019-09-02 23:08:17',
            ),
            320 => 
            array (
                'id' => 502,
                'code' => 'NC/SEC/03',
                'user_id' => 264,
                'school_id' => 3,
                'group_id' => 97,
                'created_at' => '2019-09-02 23:09:04',
                'updated_at' => '2019-09-02 23:09:04',
            ),
            321 => 
            array (
                'id' => 504,
                'code' => 'NC/SEC/05',
                'user_id' => 266,
                'school_id' => 3,
                'group_id' => 97,
                'created_at' => '2019-09-02 23:10:05',
                'updated_at' => '2019-09-02 23:10:05',
            ),
            322 => 
            array (
                'id' => 505,
                'code' => 'NC/SEC/06',
                'user_id' => 267,
                'school_id' => 3,
                'group_id' => 97,
                'created_at' => '2019-09-02 23:11:46',
                'updated_at' => '2019-09-02 23:11:46',
            ),
            323 => 
            array (
                'id' => 506,
                'code' => 'NC/SEC/07',
                'user_id' => 268,
                'school_id' => 3,
                'group_id' => 97,
                'created_at' => '2019-09-02 23:12:22',
                'updated_at' => '2019-09-02 23:12:22',
            ),
            324 => 
            array (
                'id' => 507,
                'code' => 'NC/SEC/08',
                'user_id' => 269,
                'school_id' => 3,
                'group_id' => 97,
                'created_at' => '2019-09-02 23:13:34',
                'updated_at' => '2019-09-02 23:13:34',
            ),
            325 => 
            array (
                'id' => 508,
                'code' => 'NC/SEC/09',
                'user_id' => 270,
                'school_id' => 3,
                'group_id' => 97,
                'created_at' => '2019-09-02 23:14:06',
                'updated_at' => '2019-09-02 23:14:06',
            ),
            326 => 
            array (
                'id' => 509,
                'code' => 'NC/SEC/10',
                'user_id' => 271,
                'school_id' => 3,
                'group_id' => 97,
                'created_at' => '2019-09-02 23:14:33',
                'updated_at' => '2019-09-02 23:14:33',
            ),
            327 => 
            array (
                'id' => 510,
                'code' => 'NC/SEC/11',
                'user_id' => 272,
                'school_id' => 3,
                'group_id' => 97,
                'created_at' => '2019-09-02 23:14:59',
                'updated_at' => '2019-09-02 23:14:59',
            ),
            328 => 
            array (
                'id' => 511,
                'code' => 'NC/SEC/12',
                'user_id' => 273,
                'school_id' => 3,
                'group_id' => 97,
                'created_at' => '2019-09-02 23:15:30',
                'updated_at' => '2019-09-02 23:15:30',
            ),
            329 => 
            array (
                'id' => 512,
                'code' => 'NC/SEC/13',
                'user_id' => 274,
                'school_id' => 3,
                'group_id' => 97,
                'created_at' => '2019-09-02 23:15:56',
                'updated_at' => '2019-09-02 23:15:56',
            ),
            330 => 
            array (
                'id' => 513,
                'code' => 'NC/SEC/14',
                'user_id' => 275,
                'school_id' => 3,
                'group_id' => 97,
                'created_at' => '2019-09-02 23:16:34',
                'updated_at' => '2019-09-02 23:16:34',
            ),
            331 => 
            array (
                'id' => 514,
                'code' => 'NC/SEC/15',
                'user_id' => 276,
                'school_id' => 3,
                'group_id' => 97,
                'created_at' => '2019-09-02 23:16:55',
                'updated_at' => '2019-09-02 23:16:55',
            ),
            332 => 
            array (
                'id' => 515,
                'code' => 'NC/SEC/16',
                'user_id' => 277,
                'school_id' => 3,
                'group_id' => 97,
                'created_at' => '2019-09-02 23:17:41',
                'updated_at' => '2019-09-02 23:17:41',
            ),
            333 => 
            array (
                'id' => 516,
                'code' => 'NC/SEC/17',
                'user_id' => 278,
                'school_id' => 3,
                'group_id' => 97,
                'created_at' => '2019-09-02 23:18:10',
                'updated_at' => '2019-09-02 23:18:10',
            ),
            334 => 
            array (
                'id' => 517,
                'code' => 'NC/SEC/18',
                'user_id' => 279,
                'school_id' => 3,
                'group_id' => 97,
                'created_at' => '2019-09-02 23:18:38',
                'updated_at' => '2019-09-02 23:18:38',
            ),
            335 => 
            array (
                'id' => 518,
                'code' => 'NC/SEC/19',
                'user_id' => 280,
                'school_id' => 3,
                'group_id' => 97,
                'created_at' => '2019-09-02 23:19:02',
                'updated_at' => '2019-09-02 23:19:02',
            ),
            336 => 
            array (
                'id' => 519,
                'code' => 'NC/SEC/20',
                'user_id' => 281,
                'school_id' => 3,
                'group_id' => 97,
                'created_at' => '2019-09-02 23:19:42',
                'updated_at' => '2019-09-02 23:19:42',
            ),
            337 => 
            array (
                'id' => 520,
                'code' => 'NC/SEC/21',
                'user_id' => 282,
                'school_id' => 3,
                'group_id' => 97,
                'created_at' => '2019-09-02 23:20:29',
                'updated_at' => '2019-09-02 23:20:29',
            ),
            338 => 
            array (
                'id' => 521,
                'code' => 'NC/SEC/22',
                'user_id' => 283,
                'school_id' => 3,
                'group_id' => 97,
                'created_at' => '2019-09-02 23:20:53',
                'updated_at' => '2019-09-02 23:20:53',
            ),
            339 => 
            array (
                'id' => 522,
                'code' => 'NC/SEC/23',
                'user_id' => 284,
                'school_id' => 3,
                'group_id' => 97,
                'created_at' => '2019-09-02 23:21:55',
                'updated_at' => '2019-09-02 23:21:55',
            ),
            340 => 
            array (
                'id' => 523,
                'code' => 'NC/SEC/24',
                'user_id' => 285,
                'school_id' => 3,
                'group_id' => 97,
                'created_at' => '2019-09-02 23:22:27',
                'updated_at' => '2019-09-02 23:22:27',
            ),
            341 => 
            array (
                'id' => 524,
                'code' => 'NC/SEC/25',
                'user_id' => 286,
                'school_id' => 3,
                'group_id' => 97,
                'created_at' => '2019-09-02 23:22:50',
                'updated_at' => '2019-09-02 23:22:50',
            ),
            342 => 
            array (
                'id' => 525,
                'code' => 'NC/SEC/26',
                'user_id' => 287,
                'school_id' => 3,
                'group_id' => 97,
                'created_at' => '2019-09-02 23:23:09',
                'updated_at' => '2019-09-02 23:23:09',
            ),
            343 => 
            array (
                'id' => 664,
                'code' => 'SEC/NC/002',
                'user_id' => 830,
                'school_id' => 3,
                'group_id' => 97,
                'created_at' => '2019-09-10 09:15:23',
                'updated_at' => '2019-09-10 09:15:23',
            ),
            344 => 
            array (
                'id' => 665,
                'code' => 'SEC/NC/0020',
                'user_id' => 832,
                'school_id' => 3,
                'group_id' => 97,
                'created_at' => '2019-09-10 09:36:26',
                'updated_at' => '2019-09-10 09:36:26',
            ),
            345 => 
            array (
                'id' => 666,
                'code' => 'SEC/NC/00100',
                'user_id' => 831,
                'school_id' => 3,
                'group_id' => 97,
                'created_at' => '2019-09-10 09:44:05',
                'updated_at' => '2019-09-10 09:44:05',
            ),
            346 => 
            array (
                'id' => 667,
                'code' => 'SEC/NC/0050',
                'user_id' => 833,
                'school_id' => 3,
                'group_id' => 97,
                'created_at' => '2019-09-10 09:49:49',
                'updated_at' => '2019-09-10 09:49:49',
            ),
            347 => 
            array (
                'id' => 669,
                'code' => 'LX-PB-009',
                'user_id' => 69,
                'school_id' => 6,
                'group_id' => 119,
                'created_at' => '2019-09-18 22:21:33',
                'updated_at' => '2019-09-28 11:12:00',
            ),
            348 => 
            array (
                'id' => 670,
                'code' => 'LX-PB-009',
                'user_id' => 70,
                'school_id' => 6,
                'group_id' => 119,
                'created_at' => '2019-09-18 22:21:56',
                'updated_at' => '2019-09-28 11:11:59',
            ),
            349 => 
            array (
                'id' => 671,
                'code' => 'LX-PB-009',
                'user_id' => 72,
                'school_id' => 6,
                'group_id' => 119,
                'created_at' => '2019-09-18 22:22:19',
                'updated_at' => '2019-09-28 11:11:59',
            ),
            350 => 
            array (
                'id' => 672,
                'code' => 'LX-PB-009',
                'user_id' => 73,
                'school_id' => 6,
                'group_id' => 119,
                'created_at' => '2019-09-18 22:22:40',
                'updated_at' => '2019-09-28 11:12:00',
            ),
            351 => 
            array (
                'id' => 673,
                'code' => 'LX-PB-009',
                'user_id' => 74,
                'school_id' => 6,
                'group_id' => 119,
                'created_at' => '2019-09-18 22:23:03',
                'updated_at' => '2019-09-28 11:11:59',
            ),
            352 => 
            array (
                'id' => 676,
                'code' => 'LX-PB-009',
                'user_id' => 77,
                'school_id' => 6,
                'group_id' => 119,
                'created_at' => '2019-09-18 22:24:18',
                'updated_at' => '2019-09-28 11:11:59',
            ),
            353 => 
            array (
                'id' => 678,
                'code' => NULL,
                'user_id' => 82,
                'school_id' => 6,
                'group_id' => 31,
                'created_at' => '2019-09-18 22:25:06',
                'updated_at' => '2019-10-19 19:15:43',
            ),
            354 => 
            array (
                'id' => 679,
                'code' => NULL,
                'user_id' => 83,
                'school_id' => 6,
                'group_id' => 33,
                'created_at' => '2019-09-18 22:25:39',
                'updated_at' => '2019-10-19 19:15:56',
            ),
            355 => 
            array (
                'id' => 680,
                'code' => 'LX-PB-009',
                'user_id' => 84,
                'school_id' => 6,
                'group_id' => 119,
                'created_at' => '2019-09-18 22:26:10',
                'updated_at' => '2019-09-28 11:12:00',
            ),
            356 => 
            array (
                'id' => 682,
                'code' => NULL,
                'user_id' => 86,
                'school_id' => 6,
                'group_id' => 31,
                'created_at' => '2019-09-18 22:26:55',
                'updated_at' => '2019-10-19 19:15:43',
            ),
            357 => 
            array (
                'id' => 684,
                'code' => 'LX-PB-009',
                'user_id' => 92,
                'school_id' => 6,
                'group_id' => 119,
                'created_at' => '2019-09-18 22:27:35',
                'updated_at' => '2019-09-28 11:12:00',
            ),
            358 => 
            array (
                'id' => 685,
                'code' => NULL,
                'user_id' => 94,
                'school_id' => 6,
                'group_id' => 31,
                'created_at' => '2019-09-18 22:27:56',
                'updated_at' => '2019-10-19 19:15:43',
            ),
            359 => 
            array (
                'id' => 688,
                'code' => 'LX-PB-013',
                'user_id' => 66,
                'school_id' => 6,
                'group_id' => 120,
                'created_at' => '2019-09-19 09:39:50',
                'updated_at' => '2019-09-28 11:17:15',
            ),
            360 => 
            array (
                'id' => 689,
                'code' => 'LX-PB-016',
                'user_id' => 67,
                'school_id' => 6,
                'group_id' => 120,
                'created_at' => '2019-09-19 09:40:26',
                'updated_at' => '2019-09-28 11:17:15',
            ),
            361 => 
            array (
                'id' => 690,
                'code' => 'LX-PB-003',
                'user_id' => 68,
                'school_id' => 6,
                'group_id' => 120,
                'created_at' => '2019-09-19 09:41:11',
                'updated_at' => '2019-09-28 11:17:15',
            ),
            362 => 
            array (
                'id' => 691,
                'code' => 'LX-PB-020',
                'user_id' => 71,
                'school_id' => 6,
                'group_id' => 120,
                'created_at' => '2019-09-19 09:41:50',
                'updated_at' => '2019-09-28 11:17:16',
            ),
            363 => 
            array (
                'id' => 693,
                'code' => 'LX-PB-023',
                'user_id' => 80,
                'school_id' => 6,
                'group_id' => 120,
                'created_at' => '2019-09-19 09:42:40',
                'updated_at' => '2019-09-28 11:17:16',
            ),
            364 => 
            array (
                'id' => 694,
                'code' => NULL,
                'user_id' => 81,
                'school_id' => 6,
                'group_id' => 120,
                'created_at' => '2019-09-19 09:43:07',
                'updated_at' => '2019-09-28 11:17:16',
            ),
            365 => 
            array (
                'id' => 697,
                'code' => 'LX-PB-019',
                'user_id' => 90,
                'school_id' => 6,
                'group_id' => 120,
                'created_at' => '2019-09-19 09:45:14',
                'updated_at' => '2019-09-28 11:17:16',
            ),
            366 => 
            array (
                'id' => 698,
                'code' => 'LX-PB-030',
                'user_id' => 91,
                'school_id' => 6,
                'group_id' => 120,
                'created_at' => '2019-09-19 09:45:35',
                'updated_at' => '2019-09-28 11:17:16',
            ),
            367 => 
            array (
                'id' => 699,
                'code' => 'LX-PB-010',
                'user_id' => 93,
                'school_id' => 6,
                'group_id' => 120,
                'created_at' => '2019-09-19 09:45:52',
                'updated_at' => '2019-09-28 11:17:15',
            ),
            368 => 
            array (
                'id' => 703,
                'code' => 'LX-PB-009',
                'user_id' => 118,
                'school_id' => 6,
                'group_id' => 155,
                'created_at' => '2019-09-20 17:11:44',
                'updated_at' => '2019-10-01 19:19:45',
            ),
            369 => 
            array (
                'id' => 704,
                'code' => 'LX-PB-009',
                'user_id' => 119,
                'school_id' => 6,
                'group_id' => 155,
                'created_at' => '2019-09-20 17:12:02',
                'updated_at' => '2019-10-01 19:19:45',
            ),
            370 => 
            array (
                'id' => 706,
                'code' => 'LX-PB-009',
                'user_id' => 121,
                'school_id' => 6,
                'group_id' => 155,
                'created_at' => '2019-09-20 17:12:50',
                'updated_at' => '2019-10-01 19:19:45',
            ),
            371 => 
            array (
                'id' => 710,
                'code' => 'LX-PB-009',
                'user_id' => 125,
                'school_id' => 6,
                'group_id' => 155,
                'created_at' => '2019-09-20 17:18:45',
                'updated_at' => '2019-10-01 19:19:45',
            ),
            372 => 
            array (
                'id' => 711,
                'code' => 'LX-PB-009',
                'user_id' => 126,
                'school_id' => 6,
                'group_id' => 155,
                'created_at' => '2019-09-20 17:19:15',
                'updated_at' => '2019-10-01 19:19:45',
            ),
            373 => 
            array (
                'id' => 712,
                'code' => 'LX-PB-009',
                'user_id' => 127,
                'school_id' => 6,
                'group_id' => 155,
                'created_at' => '2019-09-20 17:19:42',
                'updated_at' => '2019-10-01 19:19:45',
            ),
            374 => 
            array (
                'id' => 713,
                'code' => 'LX-PB-009',
                'user_id' => 128,
                'school_id' => 6,
                'group_id' => 155,
                'created_at' => '2019-09-20 17:20:03',
                'updated_at' => '2019-10-01 19:19:45',
            ),
            375 => 
            array (
                'id' => 714,
                'code' => 'LX-PB-009',
                'user_id' => 129,
                'school_id' => 6,
                'group_id' => 155,
                'created_at' => '2019-09-20 17:20:29',
                'updated_at' => '2019-10-01 19:19:45',
            ),
            376 => 
            array (
                'id' => 715,
                'code' => 'LX-PB-009',
                'user_id' => 130,
                'school_id' => 6,
                'group_id' => 155,
                'created_at' => '2019-09-20 17:20:49',
                'updated_at' => '2019-10-01 19:19:45',
            ),
            377 => 
            array (
                'id' => 716,
                'code' => 'LX-PB-009',
                'user_id' => 131,
                'school_id' => 6,
                'group_id' => 155,
                'created_at' => '2019-09-20 17:21:10',
                'updated_at' => '2019-10-01 19:19:45',
            ),
            378 => 
            array (
                'id' => 720,
                'code' => 'LX-PB-009',
                'user_id' => 136,
                'school_id' => 6,
                'group_id' => 155,
                'created_at' => '2019-09-20 17:28:49',
                'updated_at' => '2019-10-01 19:19:45',
            ),
            379 => 
            array (
                'id' => 722,
                'code' => 'LX-PB-009',
                'user_id' => 847,
                'school_id' => 6,
                'group_id' => 119,
                'created_at' => '2019-09-28 11:11:59',
                'updated_at' => '2019-09-28 11:11:59',
            ),
            380 => 
            array (
                'id' => 723,
                'code' => 'LX-PB-009',
                'user_id' => 848,
                'school_id' => 6,
                'group_id' => 119,
                'created_at' => '2019-09-28 11:11:59',
                'updated_at' => '2019-09-28 11:11:59',
            ),
            381 => 
            array (
                'id' => 724,
                'code' => 'LX-PB-009',
                'user_id' => 849,
                'school_id' => 6,
                'group_id' => 119,
                'created_at' => '2019-09-28 11:11:59',
                'updated_at' => '2019-09-28 11:11:59',
            ),
            382 => 
            array (
                'id' => 725,
                'code' => 'LX-PB-009',
                'user_id' => 850,
                'school_id' => 6,
                'group_id' => 119,
                'created_at' => '2019-09-28 11:11:59',
                'updated_at' => '2019-09-28 11:11:59',
            ),
            383 => 
            array (
                'id' => 726,
                'code' => 'LX-PB-009',
                'user_id' => 851,
                'school_id' => 6,
                'group_id' => 119,
                'created_at' => '2019-09-28 11:12:00',
                'updated_at' => '2019-09-28 11:12:00',
            ),
            384 => 
            array (
                'id' => 727,
                'code' => 'LX-PB-009',
                'user_id' => 852,
                'school_id' => 6,
                'group_id' => 119,
                'created_at' => '2019-09-28 11:12:00',
                'updated_at' => '2019-09-28 11:12:00',
            ),
            385 => 
            array (
                'id' => 728,
                'code' => 'LX-PB-009',
                'user_id' => 853,
                'school_id' => 6,
                'group_id' => 119,
                'created_at' => '2019-09-28 11:12:00',
                'updated_at' => '2019-09-28 11:12:00',
            ),
            386 => 
            array (
                'id' => 729,
                'code' => 'LX-PB-009',
                'user_id' => 854,
                'school_id' => 6,
                'group_id' => 119,
                'created_at' => '2019-09-28 11:12:00',
                'updated_at' => '2019-09-28 11:12:00',
            ),
            387 => 
            array (
                'id' => 730,
                'code' => 'LX-PB-009',
                'user_id' => 855,
                'school_id' => 6,
                'group_id' => 119,
                'created_at' => '2019-09-28 11:12:00',
                'updated_at' => '2019-09-28 11:12:00',
            ),
            388 => 
            array (
                'id' => 731,
                'code' => 'LX-PB-009',
                'user_id' => 856,
                'school_id' => 6,
                'group_id' => 119,
                'created_at' => '2019-09-28 11:12:00',
                'updated_at' => '2019-09-28 11:12:00',
            ),
            389 => 
            array (
                'id' => 732,
                'code' => 'LX-PB-009',
                'user_id' => 857,
                'school_id' => 6,
                'group_id' => 120,
                'created_at' => '2019-09-28 11:17:15',
                'updated_at' => '2019-09-28 11:17:15',
            ),
            390 => 
            array (
                'id' => 733,
                'code' => 'LX-PB-017',
                'user_id' => 858,
                'school_id' => 6,
                'group_id' => 120,
                'created_at' => '2019-09-28 11:17:16',
                'updated_at' => '2019-09-28 11:17:16',
            ),
            391 => 
            array (
                'id' => 734,
                'code' => 'LX-PB-018',
                'user_id' => 859,
                'school_id' => 6,
                'group_id' => 120,
                'created_at' => '2019-09-28 11:17:16',
                'updated_at' => '2019-09-28 11:17:16',
            ),
            392 => 
            array (
                'id' => 735,
                'code' => 'LX-PB-022',
                'user_id' => 860,
                'school_id' => 6,
                'group_id' => 120,
                'created_at' => '2019-09-28 11:17:16',
                'updated_at' => '2019-09-28 11:17:16',
            ),
            393 => 
            array (
                'id' => 736,
                'code' => 'LX-PB-026',
                'user_id' => 861,
                'school_id' => 6,
                'group_id' => 120,
                'created_at' => '2019-09-28 11:17:16',
                'updated_at' => '2019-09-28 11:17:16',
            ),
            394 => 
            array (
                'id' => 737,
                'code' => 'LX-PB-031',
                'user_id' => 862,
                'school_id' => 6,
                'group_id' => 120,
                'created_at' => '2019-09-28 11:17:16',
                'updated_at' => '2019-09-28 11:17:16',
            ),
            395 => 
            array (
                'id' => 738,
                'code' => 'LX-PB-035',
                'user_id' => 863,
                'school_id' => 6,
                'group_id' => 120,
                'created_at' => '2019-09-28 11:17:16',
                'updated_at' => '2019-09-28 11:17:16',
            ),
            396 => 
            array (
                'id' => 739,
                'code' => NULL,
                'user_id' => 864,
                'school_id' => 6,
                'group_id' => 120,
                'created_at' => '2019-09-28 11:17:16',
                'updated_at' => '2019-09-28 11:17:16',
            ),
            397 => 
            array (
                'id' => 752,
                'code' => 'LX-PB-009',
                'user_id' => 877,
                'school_id' => 6,
                'group_id' => 130,
                'created_at' => '2019-09-28 11:37:14',
                'updated_at' => '2019-09-28 11:37:14',
            ),
            398 => 
            array (
                'id' => 753,
                'code' => 'LX-PB-009',
                'user_id' => 878,
                'school_id' => 6,
                'group_id' => 130,
                'created_at' => '2019-09-28 11:38:07',
                'updated_at' => '2019-09-28 11:38:07',
            ),
            399 => 
            array (
                'id' => 754,
                'code' => 'LX-PB-009',
                'user_id' => 101,
                'school_id' => 6,
                'group_id' => 130,
                'created_at' => '2019-09-28 11:40:14',
                'updated_at' => '2019-09-28 11:40:14',
            ),
            400 => 
            array (
                'id' => 755,
                'code' => 'LX-PB-009',
                'user_id' => 97,
                'school_id' => 6,
                'group_id' => 130,
                'created_at' => '2019-09-28 11:40:54',
                'updated_at' => '2019-09-28 11:40:54',
            ),
            401 => 
            array (
                'id' => 756,
                'code' => 'LX-PB-009',
                'user_id' => 879,
                'school_id' => 6,
                'group_id' => 130,
                'created_at' => '2019-09-28 11:42:05',
                'updated_at' => '2019-09-28 11:42:05',
            ),
            402 => 
            array (
                'id' => 757,
                'code' => 'LX-PB-009',
                'user_id' => 880,
                'school_id' => 6,
                'group_id' => 130,
                'created_at' => '2019-09-28 11:43:08',
                'updated_at' => '2019-09-28 11:43:08',
            ),
            403 => 
            array (
                'id' => 758,
                'code' => 'LX-PB-009',
                'user_id' => 107,
                'school_id' => 6,
                'group_id' => 130,
                'created_at' => '2019-09-28 11:44:13',
                'updated_at' => '2019-09-28 11:44:13',
            ),
            404 => 
            array (
                'id' => 759,
                'code' => 'LX-PB-009',
                'user_id' => 112,
                'school_id' => 6,
                'group_id' => 130,
                'created_at' => '2019-09-28 11:45:35',
                'updated_at' => '2019-09-28 11:45:35',
            ),
            405 => 
            array (
                'id' => 760,
                'code' => NULL,
                'user_id' => 115,
                'school_id' => 6,
                'group_id' => 31,
                'created_at' => '2019-09-28 11:46:05',
                'updated_at' => '2019-10-19 19:15:43',
            ),
            406 => 
            array (
                'id' => 761,
                'code' => 'LX-PB-009',
                'user_id' => 881,
                'school_id' => 6,
                'group_id' => 130,
                'created_at' => '2019-09-28 11:47:36',
                'updated_at' => '2019-09-28 11:47:36',
            ),
            407 => 
            array (
                'id' => 762,
                'code' => 'LX-PB-009',
                'user_id' => 882,
                'school_id' => 6,
                'group_id' => 130,
                'created_at' => '2019-09-28 11:52:37',
                'updated_at' => '2019-09-28 11:52:37',
            ),
            408 => 
            array (
                'id' => 763,
                'code' => 'LX-PB-009',
                'user_id' => 103,
                'school_id' => 6,
                'group_id' => 130,
                'created_at' => '2019-09-28 11:53:30',
                'updated_at' => '2019-09-28 11:53:30',
            ),
            409 => 
            array (
                'id' => 764,
                'code' => 'LX-PB-009',
                'user_id' => 883,
                'school_id' => 6,
                'group_id' => 130,
                'created_at' => '2019-09-28 11:54:50',
                'updated_at' => '2019-09-28 11:54:50',
            ),
            410 => 
            array (
                'id' => 765,
                'code' => 'LX-PB-009',
                'user_id' => 96,
                'school_id' => 6,
                'group_id' => 130,
                'created_at' => '2019-09-28 11:56:01',
                'updated_at' => '2019-09-28 11:56:01',
            ),
            411 => 
            array (
                'id' => 766,
                'code' => NULL,
                'user_id' => 109,
                'school_id' => 6,
                'group_id' => 34,
                'created_at' => '2019-09-28 11:56:39',
                'updated_at' => '2019-10-19 19:51:23',
            ),
            412 => 
            array (
                'id' => 767,
                'code' => 'LX-PB-009',
                'user_id' => 884,
                'school_id' => 6,
                'group_id' => 130,
                'created_at' => '2019-09-28 11:59:07',
                'updated_at' => '2019-09-28 11:59:07',
            ),
            413 => 
            array (
                'id' => 768,
                'code' => 'LX-PB-009',
                'user_id' => 108,
                'school_id' => 6,
                'group_id' => 130,
                'created_at' => '2019-09-28 12:00:13',
                'updated_at' => '2019-09-28 12:00:13',
            ),
            414 => 
            array (
                'id' => 769,
                'code' => 'LX-PB-009',
                'user_id' => 114,
                'school_id' => 6,
                'group_id' => 130,
                'created_at' => '2019-09-28 12:00:46',
                'updated_at' => '2019-09-28 12:00:46',
            ),
            415 => 
            array (
                'id' => 770,
                'code' => 'JH2 AZUL',
                'user_id' => 113,
                'school_id' => 6,
                'group_id' => 130,
                'created_at' => '2019-09-28 12:01:10',
                'updated_at' => '2019-09-28 12:01:10',
            ),
            416 => 
            array (
                'id' => 771,
                'code' => 'LX-PB-009',
                'user_id' => 885,
                'school_id' => 6,
                'group_id' => 155,
                'created_at' => '2019-09-28 12:07:39',
                'updated_at' => '2019-10-01 19:19:45',
            ),
            417 => 
            array (
                'id' => 772,
                'code' => 'LX-PB-009',
                'user_id' => 886,
                'school_id' => 6,
                'group_id' => 155,
                'created_at' => '2019-09-28 12:07:40',
                'updated_at' => '2019-10-01 19:19:45',
            ),
            418 => 
            array (
                'id' => 773,
                'code' => 'LX-PB-009',
                'user_id' => 887,
                'school_id' => 6,
                'group_id' => 155,
                'created_at' => '2019-09-28 12:07:40',
                'updated_at' => '2019-10-01 19:19:45',
            ),
            419 => 
            array (
                'id' => 774,
                'code' => 'LX-PB-009',
                'user_id' => 888,
                'school_id' => 6,
                'group_id' => 155,
                'created_at' => '2019-09-28 12:07:40',
                'updated_at' => '2019-10-01 19:19:45',
            ),
            420 => 
            array (
                'id' => 775,
                'code' => 'LX-PB-009',
                'user_id' => 889,
                'school_id' => 6,
                'group_id' => 155,
                'created_at' => '2019-09-28 12:07:40',
                'updated_at' => '2019-10-01 19:19:45',
            ),
            421 => 
            array (
                'id' => 776,
                'code' => 'LX-PB-009',
                'user_id' => 890,
                'school_id' => 6,
                'group_id' => 155,
                'created_at' => '2019-09-28 12:07:40',
                'updated_at' => '2019-10-01 19:19:45',
            ),
            422 => 
            array (
                'id' => 777,
                'code' => 'LX-PB-009',
                'user_id' => 891,
                'school_id' => 6,
                'group_id' => 155,
                'created_at' => '2019-09-28 12:07:40',
                'updated_at' => '2019-10-01 19:19:45',
            ),
            423 => 
            array (
                'id' => 826,
                'code' => 'LX-PB-001',
                'user_id' => 810,
                'school_id' => 6,
                'group_id' => 115,
                'created_at' => '2019-10-05 20:18:28',
                'updated_at' => '2019-10-05 20:18:28',
            ),
            424 => 
            array (
                'id' => 827,
                'code' => 'LX-PB-002',
                'user_id' => 163,
                'school_id' => 6,
                'group_id' => 115,
                'created_at' => '2019-10-05 20:19:37',
                'updated_at' => '2019-10-05 20:19:37',
            ),
            425 => 
            array (
                'id' => 828,
                'code' => 'LX-PB-007',
                'user_id' => 164,
                'school_id' => 6,
                'group_id' => 115,
                'created_at' => '2019-10-05 20:20:11',
                'updated_at' => '2019-10-05 20:20:11',
            ),
            426 => 
            array (
                'id' => 829,
                'code' => 'LX-PB-008',
                'user_id' => 165,
                'school_id' => 6,
                'group_id' => 115,
                'created_at' => '2019-10-05 20:20:34',
                'updated_at' => '2019-10-05 20:20:34',
            ),
            427 => 
            array (
                'id' => 830,
                'code' => 'LX-PB-011',
                'user_id' => 811,
                'school_id' => 6,
                'group_id' => 115,
                'created_at' => '2019-10-05 20:21:04',
                'updated_at' => '2019-10-05 20:21:04',
            ),
            428 => 
            array (
                'id' => 831,
                'code' => 'LX-PB-012',
                'user_id' => 812,
                'school_id' => 6,
                'group_id' => 115,
                'created_at' => '2019-10-05 20:21:27',
                'updated_at' => '2019-10-05 20:21:27',
            ),
            429 => 
            array (
                'id' => 832,
                'code' => 'LX-PB-014',
                'user_id' => 813,
                'school_id' => 6,
                'group_id' => 115,
                'created_at' => '2019-10-05 20:21:53',
                'updated_at' => '2019-10-05 20:21:53',
            ),
            430 => 
            array (
                'id' => 833,
                'code' => 'LX-PB-015',
                'user_id' => 823,
                'school_id' => 6,
                'group_id' => 115,
                'created_at' => '2019-10-05 20:22:27',
                'updated_at' => '2019-10-05 20:22:27',
            ),
            431 => 
            array (
                'id' => 834,
                'code' => NULL,
                'user_id' => 814,
                'school_id' => 6,
                'group_id' => 32,
                'created_at' => '2019-10-05 20:22:54',
                'updated_at' => '2019-10-19 19:32:11',
            ),
            432 => 
            array (
                'id' => 835,
                'code' => 'LX-PB-024',
                'user_id' => 815,
                'school_id' => 6,
                'group_id' => 115,
                'created_at' => '2019-10-05 20:23:26',
                'updated_at' => '2019-10-05 20:23:26',
            ),
            433 => 
            array (
                'id' => 836,
                'code' => 'LX-PB-025',
                'user_id' => 816,
                'school_id' => 6,
                'group_id' => 115,
                'created_at' => '2019-10-05 20:23:49',
                'updated_at' => '2019-10-05 20:23:49',
            ),
            434 => 
            array (
                'id' => 837,
                'code' => 'LX-PB-027',
                'user_id' => 817,
                'school_id' => 6,
                'group_id' => 115,
                'created_at' => '2019-10-05 20:24:12',
                'updated_at' => '2019-10-05 20:24:12',
            ),
            435 => 
            array (
                'id' => 838,
                'code' => 'LX-PB-028',
                'user_id' => 818,
                'school_id' => 6,
                'group_id' => 115,
                'created_at' => '2019-10-05 20:24:39',
                'updated_at' => '2019-10-05 20:24:39',
            ),
            436 => 
            array (
                'id' => 839,
                'code' => 'LX-PB-029',
                'user_id' => 819,
                'school_id' => 6,
                'group_id' => 115,
                'created_at' => '2019-10-05 20:25:12',
                'updated_at' => '2019-10-05 20:25:12',
            ),
            437 => 
            array (
                'id' => 840,
                'code' => 'LX-PB-032',
                'user_id' => 820,
                'school_id' => 6,
                'group_id' => 115,
                'created_at' => '2019-10-05 20:26:05',
                'updated_at' => '2019-10-05 20:26:05',
            ),
            438 => 
            array (
                'id' => 841,
                'code' => 'LX-PB-033',
                'user_id' => 821,
                'school_id' => 6,
                'group_id' => 115,
                'created_at' => '2019-10-05 20:26:31',
                'updated_at' => '2019-10-05 20:26:31',
            ),
            439 => 
            array (
                'id' => 842,
                'code' => 'LX-PB-034',
                'user_id' => 822,
                'school_id' => 6,
                'group_id' => 115,
                'created_at' => '2019-10-05 20:27:07',
                'updated_at' => '2019-10-05 20:27:07',
            ),
            440 => 
            array (
                'id' => 843,
                'code' => 'LX-PB-037',
                'user_id' => 179,
                'school_id' => 6,
                'group_id' => 26,
                'created_at' => '2019-10-05 21:19:29',
                'updated_at' => '2019-10-05 21:19:29',
            ),
            441 => 
            array (
                'id' => 844,
                'code' => 'LX-PB-039',
                'user_id' => 180,
                'school_id' => 6,
                'group_id' => 26,
                'created_at' => '2019-10-05 21:20:01',
                'updated_at' => '2019-10-05 21:20:01',
            ),
            442 => 
            array (
                'id' => 845,
                'code' => 'LX-PB-040',
                'user_id' => 181,
                'school_id' => 6,
                'group_id' => 26,
                'created_at' => '2019-10-05 21:20:38',
                'updated_at' => '2019-10-05 21:20:38',
            ),
            443 => 
            array (
                'id' => 846,
                'code' => 'LX-PB-041',
                'user_id' => 182,
                'school_id' => 6,
                'group_id' => 26,
                'created_at' => '2019-10-05 21:21:10',
                'updated_at' => '2019-10-05 21:21:10',
            ),
            444 => 
            array (
                'id' => 847,
                'code' => 'LX-PB-042',
                'user_id' => 183,
                'school_id' => 6,
                'group_id' => 26,
                'created_at' => '2019-10-05 21:22:32',
                'updated_at' => '2019-10-05 21:22:32',
            ),
            445 => 
            array (
                'id' => 848,
                'code' => 'LX-PB-044',
                'user_id' => 184,
                'school_id' => 6,
                'group_id' => 26,
                'created_at' => '2019-10-05 21:23:03',
                'updated_at' => '2019-10-05 21:23:03',
            ),
            446 => 
            array (
                'id' => 849,
                'code' => 'LX-PB-045',
                'user_id' => 185,
                'school_id' => 6,
                'group_id' => 26,
                'created_at' => '2019-10-05 21:24:11',
                'updated_at' => '2019-10-05 21:24:11',
            ),
            447 => 
            array (
                'id' => 850,
                'code' => 'LX-PB-046',
                'user_id' => 186,
                'school_id' => 6,
                'group_id' => 26,
                'created_at' => '2019-10-05 21:24:47',
                'updated_at' => '2019-10-05 21:24:47',
            ),
            448 => 
            array (
                'id' => 851,
                'code' => 'LX-PB-047',
                'user_id' => 942,
                'school_id' => 6,
                'group_id' => 26,
                'created_at' => '2019-10-05 21:27:03',
                'updated_at' => '2019-10-05 21:27:03',
            ),
            449 => 
            array (
                'id' => 852,
                'code' => 'LX-PB-048',
                'user_id' => 188,
                'school_id' => 6,
                'group_id' => 26,
                'created_at' => '2019-10-05 21:27:45',
                'updated_at' => '2019-10-05 21:27:45',
            ),
            450 => 
            array (
                'id' => 853,
                'code' => 'LX-PB-053',
                'user_id' => 189,
                'school_id' => 6,
                'group_id' => 26,
                'created_at' => '2019-10-05 21:28:15',
                'updated_at' => '2019-10-05 21:28:15',
            ),
            451 => 
            array (
                'id' => 854,
                'code' => 'LX-PB-054',
                'user_id' => 190,
                'school_id' => 6,
                'group_id' => 26,
                'created_at' => '2019-10-05 21:28:41',
                'updated_at' => '2019-10-05 21:28:41',
            ),
            452 => 
            array (
                'id' => 855,
                'code' => 'LX-PB-055',
                'user_id' => 191,
                'school_id' => 6,
                'group_id' => 26,
                'created_at' => '2019-10-05 21:29:08',
                'updated_at' => '2019-10-05 21:29:08',
            ),
            453 => 
            array (
                'id' => 856,
                'code' => 'LX-PB-056',
                'user_id' => 192,
                'school_id' => 6,
                'group_id' => 26,
                'created_at' => '2019-10-05 21:29:43',
                'updated_at' => '2019-10-05 21:29:43',
            ),
            454 => 
            array (
                'id' => 857,
                'code' => 'LX-PB-057',
                'user_id' => 193,
                'school_id' => 6,
                'group_id' => 26,
                'created_at' => '2019-10-05 21:30:12',
                'updated_at' => '2019-10-05 21:30:12',
            ),
            455 => 
            array (
                'id' => 858,
                'code' => NULL,
                'user_id' => 194,
                'school_id' => 6,
                'group_id' => 31,
                'created_at' => '2019-10-05 21:30:54',
                'updated_at' => '2019-10-19 19:15:43',
            ),
            456 => 
            array (
                'id' => 859,
                'code' => 'LX-PB-060',
                'user_id' => 195,
                'school_id' => 6,
                'group_id' => 26,
                'created_at' => '2019-10-05 21:31:22',
                'updated_at' => '2019-10-05 21:31:22',
            ),
            457 => 
            array (
                'id' => 860,
                'code' => 'LX-PB-066',
                'user_id' => 196,
                'school_id' => 6,
                'group_id' => 26,
                'created_at' => '2019-10-05 21:31:50',
                'updated_at' => '2019-10-05 21:31:50',
            ),
            458 => 
            array (
                'id' => 861,
                'code' => 'LX-PB-036',
                'user_id' => 943,
                'school_id' => 6,
                'group_id' => 162,
                'created_at' => '2019-10-05 21:54:47',
                'updated_at' => '2019-10-05 21:54:47',
            ),
            459 => 
            array (
                'id' => 862,
                'code' => NULL,
                'user_id' => 944,
                'school_id' => 6,
                'group_id' => 34,
                'created_at' => '2019-10-05 21:55:09',
                'updated_at' => '2019-10-19 19:41:25',
            ),
            460 => 
            array (
                'id' => 863,
                'code' => 'LX-PB-043',
                'user_id' => 945,
                'school_id' => 6,
                'group_id' => 162,
                'created_at' => '2019-10-05 21:55:41',
                'updated_at' => '2019-10-05 21:55:41',
            ),
            461 => 
            array (
                'id' => 864,
                'code' => 'LX-PB-049',
                'user_id' => 946,
                'school_id' => 6,
                'group_id' => 162,
                'created_at' => '2019-10-05 21:56:05',
                'updated_at' => '2019-10-05 21:56:05',
            ),
            462 => 
            array (
                'id' => 865,
                'code' => 'LX-PB-050',
                'user_id' => 947,
                'school_id' => 6,
                'group_id' => 162,
                'created_at' => '2019-10-05 21:56:30',
                'updated_at' => '2019-10-05 21:56:30',
            ),
            463 => 
            array (
                'id' => 866,
                'code' => 'LX-PB-051',
                'user_id' => 948,
                'school_id' => 6,
                'group_id' => 162,
                'created_at' => '2019-10-05 21:56:58',
                'updated_at' => '2019-10-05 21:56:58',
            ),
            464 => 
            array (
                'id' => 867,
                'code' => 'LX-PB-052',
                'user_id' => 949,
                'school_id' => 6,
                'group_id' => 162,
                'created_at' => '2019-10-05 21:57:44',
                'updated_at' => '2019-10-05 21:57:44',
            ),
            465 => 
            array (
                'id' => 868,
                'code' => 'LX-PB-059',
                'user_id' => 950,
                'school_id' => 6,
                'group_id' => 162,
                'created_at' => '2019-10-05 21:58:31',
                'updated_at' => '2019-10-05 21:58:31',
            ),
            466 => 
            array (
                'id' => 869,
                'code' => 'LX-PB-061',
                'user_id' => 951,
                'school_id' => 6,
                'group_id' => 162,
                'created_at' => '2019-10-05 21:58:56',
                'updated_at' => '2019-10-05 21:58:56',
            ),
            467 => 
            array (
                'id' => 870,
                'code' => 'LX-PB-062',
                'user_id' => 952,
                'school_id' => 6,
                'group_id' => 162,
                'created_at' => '2019-10-05 21:59:19',
                'updated_at' => '2019-10-05 21:59:19',
            ),
            468 => 
            array (
                'id' => 871,
                'code' => 'LX-PB-063',
                'user_id' => 953,
                'school_id' => 6,
                'group_id' => 162,
                'created_at' => '2019-10-05 21:59:44',
                'updated_at' => '2019-10-05 21:59:44',
            ),
            469 => 
            array (
                'id' => 872,
                'code' => 'LX-PB-064',
                'user_id' => 954,
                'school_id' => 6,
                'group_id' => 162,
                'created_at' => '2019-10-05 22:00:07',
                'updated_at' => '2019-10-05 22:00:07',
            ),
            470 => 
            array (
                'id' => 873,
                'code' => 'LX-PB-065',
                'user_id' => 955,
                'school_id' => 6,
                'group_id' => 162,
                'created_at' => '2019-10-05 22:00:34',
                'updated_at' => '2019-10-05 22:00:34',
            ),
            471 => 
            array (
                'id' => 874,
                'code' => NULL,
                'user_id' => 956,
                'school_id' => 6,
                'group_id' => 33,
                'created_at' => '2019-10-05 22:00:59',
                'updated_at' => '2019-10-19 19:15:57',
            ),
            472 => 
            array (
                'id' => 875,
                'code' => NULL,
                'user_id' => 957,
                'school_id' => 6,
                'group_id' => 34,
                'created_at' => '2019-10-05 22:01:20',
                'updated_at' => '2019-10-19 19:47:44',
            ),
            473 => 
            array (
                'id' => 909,
                'code' => NULL,
                'user_id' => 997,
                'school_id' => 6,
                'group_id' => 32,
                'created_at' => '2019-10-19 19:15:42',
                'updated_at' => '2019-10-19 19:28:39',
            ),
            474 => 
            array (
                'id' => 910,
                'code' => NULL,
                'user_id' => 998,
                'school_id' => 6,
                'group_id' => 31,
                'created_at' => '2019-10-19 19:15:42',
                'updated_at' => '2019-10-19 19:15:42',
            ),
            475 => 
            array (
                'id' => 911,
                'code' => NULL,
                'user_id' => 999,
                'school_id' => 6,
                'group_id' => 31,
                'created_at' => '2019-10-19 19:15:43',
                'updated_at' => '2019-10-19 19:15:43',
            ),
            476 => 
            array (
                'id' => 912,
                'code' => NULL,
                'user_id' => 1000,
                'school_id' => 6,
                'group_id' => 31,
                'created_at' => '2019-10-19 19:15:43',
                'updated_at' => '2019-10-19 19:15:43',
            ),
            477 => 
            array (
                'id' => 913,
                'code' => NULL,
                'user_id' => 1001,
                'school_id' => 6,
                'group_id' => 31,
                'created_at' => '2019-10-19 19:15:43',
                'updated_at' => '2019-10-19 19:15:43',
            ),
            478 => 
            array (
                'id' => 914,
                'code' => NULL,
                'user_id' => 1002,
                'school_id' => 6,
                'group_id' => 31,
                'created_at' => '2019-10-19 19:15:43',
                'updated_at' => '2019-10-19 19:15:43',
            ),
            479 => 
            array (
                'id' => 915,
                'code' => NULL,
                'user_id' => 1003,
                'school_id' => 6,
                'group_id' => 31,
                'created_at' => '2019-10-19 19:15:43',
                'updated_at' => '2019-10-19 19:15:43',
            ),
            480 => 
            array (
                'id' => 916,
                'code' => NULL,
                'user_id' => 1004,
                'school_id' => 6,
                'group_id' => 33,
                'created_at' => '2019-10-19 19:15:56',
                'updated_at' => '2019-10-19 19:15:56',
            ),
            481 => 
            array (
                'id' => 917,
                'code' => NULL,
                'user_id' => 1005,
                'school_id' => 6,
                'group_id' => 33,
                'created_at' => '2019-10-19 19:15:56',
                'updated_at' => '2019-10-19 19:15:56',
            ),
            482 => 
            array (
                'id' => 918,
                'code' => NULL,
                'user_id' => 1006,
                'school_id' => 6,
                'group_id' => 33,
                'created_at' => '2019-10-19 19:15:56',
                'updated_at' => '2019-10-19 19:15:56',
            ),
            483 => 
            array (
                'id' => 919,
                'code' => NULL,
                'user_id' => 1007,
                'school_id' => 6,
                'group_id' => 33,
                'created_at' => '2019-10-19 19:15:56',
                'updated_at' => '2019-10-19 19:15:56',
            ),
            484 => 
            array (
                'id' => 920,
                'code' => NULL,
                'user_id' => 1008,
                'school_id' => 6,
                'group_id' => 33,
                'created_at' => '2019-10-19 19:15:56',
                'updated_at' => '2019-10-19 19:15:56',
            ),
            485 => 
            array (
                'id' => 921,
                'code' => NULL,
                'user_id' => 1009,
                'school_id' => 6,
                'group_id' => 33,
                'created_at' => '2019-10-19 19:15:57',
                'updated_at' => '2019-10-19 19:15:57',
            ),
            486 => 
            array (
                'id' => 922,
                'code' => NULL,
                'user_id' => 1010,
                'school_id' => 6,
                'group_id' => 33,
                'created_at' => '2019-10-19 19:15:57',
                'updated_at' => '2019-10-19 19:15:57',
            ),
            487 => 
            array (
                'id' => 923,
                'code' => NULL,
                'user_id' => 1011,
                'school_id' => 6,
                'group_id' => 33,
                'created_at' => '2019-10-19 19:15:57',
                'updated_at' => '2019-10-19 19:15:57',
            ),
            488 => 
            array (
                'id' => 937,
                'code' => NULL,
                'user_id' => 1025,
                'school_id' => 6,
                'group_id' => 32,
                'created_at' => '2019-10-19 19:28:39',
                'updated_at' => '2019-10-19 19:28:39',
            ),
            489 => 
            array (
                'id' => 938,
                'code' => NULL,
                'user_id' => 1026,
                'school_id' => 6,
                'group_id' => 32,
                'created_at' => '2019-10-19 19:30:42',
                'updated_at' => '2019-10-19 19:30:42',
            ),
            490 => 
            array (
                'id' => 939,
                'code' => NULL,
                'user_id' => 1027,
                'school_id' => 6,
                'group_id' => 32,
                'created_at' => '2019-10-19 19:30:42',
                'updated_at' => '2019-10-19 19:30:42',
            ),
            491 => 
            array (
                'id' => 940,
                'code' => NULL,
                'user_id' => 1028,
                'school_id' => 6,
                'group_id' => 32,
                'created_at' => '2019-10-19 19:32:11',
                'updated_at' => '2019-10-19 19:32:11',
            ),
            492 => 
            array (
                'id' => 941,
                'code' => NULL,
                'user_id' => 1029,
                'school_id' => 6,
                'group_id' => 32,
                'created_at' => '2019-10-19 19:32:11',
                'updated_at' => '2019-10-19 19:32:11',
            ),
            493 => 
            array (
                'id' => 942,
                'code' => NULL,
                'user_id' => 1030,
                'school_id' => 6,
                'group_id' => 32,
                'created_at' => '2019-10-19 19:32:11',
                'updated_at' => '2019-10-19 19:32:11',
            ),
            494 => 
            array (
                'id' => 943,
                'code' => NULL,
                'user_id' => 1031,
                'school_id' => 6,
                'group_id' => 32,
                'created_at' => '2019-10-19 19:32:11',
                'updated_at' => '2019-10-19 19:32:11',
            ),
            495 => 
            array (
                'id' => 944,
                'code' => NULL,
                'user_id' => 1032,
                'school_id' => 6,
                'group_id' => 32,
                'created_at' => '2019-10-19 19:33:21',
                'updated_at' => '2019-10-19 19:33:21',
            ),
            496 => 
            array (
                'id' => 949,
                'code' => NULL,
                'user_id' => 1037,
                'school_id' => 6,
                'group_id' => 34,
                'created_at' => '2019-10-19 19:40:42',
                'updated_at' => '2019-10-19 19:40:42',
            ),
            497 => 
            array (
                'id' => 950,
                'code' => NULL,
                'user_id' => 1038,
                'school_id' => 6,
                'group_id' => 34,
                'created_at' => '2019-10-19 19:40:42',
                'updated_at' => '2019-10-19 19:40:42',
            ),
            498 => 
            array (
                'id' => 951,
                'code' => NULL,
                'user_id' => 1039,
                'school_id' => 6,
                'group_id' => 34,
                'created_at' => '2019-10-19 19:41:26',
                'updated_at' => '2019-10-19 19:41:26',
            ),
            499 => 
            array (
                'id' => 952,
                'code' => NULL,
                'user_id' => 1040,
                'school_id' => 6,
                'group_id' => 34,
                'created_at' => '2019-10-19 19:41:50',
                'updated_at' => '2019-10-19 19:41:50',
            ),
        ));
        \DB::table('students')->insert(array (
            0 => 
            array (
                'id' => 955,
                'code' => NULL,
                'user_id' => 1043,
                'school_id' => 6,
                'group_id' => 34,
                'created_at' => '2019-10-19 19:46:59',
                'updated_at' => '2019-10-19 19:46:59',
            ),
            1 => 
            array (
                'id' => 956,
                'code' => NULL,
                'user_id' => 1044,
                'school_id' => 6,
                'group_id' => 34,
                'created_at' => '2019-10-19 19:50:38',
                'updated_at' => '2019-10-19 19:50:38',
            ),
            2 => 
            array (
                'id' => 957,
                'code' => NULL,
                'user_id' => 1045,
                'school_id' => 6,
                'group_id' => 34,
                'created_at' => '2019-10-19 19:51:03',
                'updated_at' => '2019-10-19 19:51:03',
            ),
            3 => 
            array (
                'id' => 958,
                'code' => 'EG-SEC-193',
                'user_id' => 1046,
                'school_id' => 13,
                'group_id' => 168,
                'created_at' => '2019-11-05 13:00:20',
                'updated_at' => '2019-11-06 13:16:06',
            ),
            4 => 
            array (
                'id' => 959,
                'code' => 'EG-SEC-194',
                'user_id' => 1047,
                'school_id' => 13,
                'group_id' => 168,
                'created_at' => '2019-11-05 13:00:20',
                'updated_at' => '2019-11-06 13:16:06',
            ),
            5 => 
            array (
                'id' => 960,
                'code' => 'EG-SEC-195',
                'user_id' => 1048,
                'school_id' => 13,
                'group_id' => 168,
                'created_at' => '2019-11-05 13:00:20',
                'updated_at' => '2019-11-06 13:16:06',
            ),
            6 => 
            array (
                'id' => 961,
                'code' => 'EG-SEC-196',
                'user_id' => 1049,
                'school_id' => 13,
                'group_id' => 168,
                'created_at' => '2019-11-05 13:00:20',
                'updated_at' => '2019-11-06 13:16:06',
            ),
            7 => 
            array (
                'id' => 962,
                'code' => 'EG-SEC-197',
                'user_id' => 1050,
                'school_id' => 13,
                'group_id' => 168,
                'created_at' => '2019-11-05 13:00:20',
                'updated_at' => '2019-11-06 13:16:06',
            ),
            8 => 
            array (
                'id' => 963,
                'code' => 'EG-SEC-198',
                'user_id' => 1051,
                'school_id' => 13,
                'group_id' => 168,
                'created_at' => '2019-11-05 13:00:20',
                'updated_at' => '2019-11-06 13:16:06',
            ),
            9 => 
            array (
                'id' => 964,
                'code' => 'EG-SEC-199',
                'user_id' => 1052,
                'school_id' => 13,
                'group_id' => 168,
                'created_at' => '2019-11-05 13:00:20',
                'updated_at' => '2019-11-06 13:16:06',
            ),
            10 => 
            array (
                'id' => 965,
                'code' => 'EG-SEC-200',
                'user_id' => 1053,
                'school_id' => 13,
                'group_id' => 168,
                'created_at' => '2019-11-05 13:00:21',
                'updated_at' => '2019-11-06 13:16:06',
            ),
            11 => 
            array (
                'id' => 966,
                'code' => 'EG-SEC-201',
                'user_id' => 1054,
                'school_id' => 13,
                'group_id' => 168,
                'created_at' => '2019-11-05 13:00:21',
                'updated_at' => '2019-11-06 13:16:06',
            ),
            12 => 
            array (
                'id' => 967,
                'code' => 'EG-SEC-202',
                'user_id' => 1055,
                'school_id' => 13,
                'group_id' => 168,
                'created_at' => '2019-11-05 13:00:21',
                'updated_at' => '2019-11-06 13:16:06',
            ),
            13 => 
            array (
                'id' => 968,
                'code' => 'EG-SEC-203',
                'user_id' => 1056,
                'school_id' => 13,
                'group_id' => 168,
                'created_at' => '2019-11-05 13:00:21',
                'updated_at' => '2019-11-06 13:16:06',
            ),
            14 => 
            array (
                'id' => 969,
                'code' => 'EG-SEC-204',
                'user_id' => 1057,
                'school_id' => 13,
                'group_id' => 168,
                'created_at' => '2019-11-05 13:00:21',
                'updated_at' => '2019-11-06 13:16:06',
            ),
            15 => 
            array (
                'id' => 970,
                'code' => 'EG-SEC-205',
                'user_id' => 1058,
                'school_id' => 13,
                'group_id' => 168,
                'created_at' => '2019-11-05 13:00:21',
                'updated_at' => '2019-11-06 13:16:06',
            ),
            16 => 
            array (
                'id' => 971,
                'code' => 'EG-SEC-206',
                'user_id' => 1059,
                'school_id' => 13,
                'group_id' => 168,
                'created_at' => '2019-11-05 13:00:21',
                'updated_at' => '2019-11-06 13:16:06',
            ),
            17 => 
            array (
                'id' => 972,
                'code' => 'EG-SEC-207',
                'user_id' => 1060,
                'school_id' => 13,
                'group_id' => 168,
                'created_at' => '2019-11-05 13:00:21',
                'updated_at' => '2019-11-06 13:16:06',
            ),
            18 => 
            array (
                'id' => 973,
                'code' => 'EG-SEC-208',
                'user_id' => 1061,
                'school_id' => 13,
                'group_id' => 168,
                'created_at' => '2019-11-05 13:00:21',
                'updated_at' => '2019-11-06 13:16:06',
            ),
            19 => 
            array (
                'id' => 974,
                'code' => 'EG-SEC-209',
                'user_id' => 1062,
                'school_id' => 13,
                'group_id' => 168,
                'created_at' => '2019-11-05 13:00:21',
                'updated_at' => '2019-11-06 13:16:06',
            ),
            20 => 
            array (
                'id' => 975,
                'code' => 'EG-SEC-210',
                'user_id' => 1063,
                'school_id' => 13,
                'group_id' => 168,
                'created_at' => '2019-11-05 13:00:22',
                'updated_at' => '2019-11-06 13:16:06',
            ),
            21 => 
            array (
                'id' => 976,
                'code' => 'EG-SEC-211',
                'user_id' => 1064,
                'school_id' => 13,
                'group_id' => 168,
                'created_at' => '2019-11-05 13:00:22',
                'updated_at' => '2019-11-06 13:16:06',
            ),
            22 => 
            array (
                'id' => 977,
                'code' => 'EG-SEC-212',
                'user_id' => 1065,
                'school_id' => 13,
                'group_id' => 168,
                'created_at' => '2019-11-05 13:00:22',
                'updated_at' => '2019-11-06 13:16:06',
            ),
            23 => 
            array (
                'id' => 978,
                'code' => 'EG-SEC-213',
                'user_id' => 1066,
                'school_id' => 13,
                'group_id' => 168,
                'created_at' => '2019-11-05 13:00:22',
                'updated_at' => '2019-11-06 13:16:06',
            ),
            24 => 
            array (
                'id' => 979,
                'code' => 'EG-SEC-214',
                'user_id' => 1067,
                'school_id' => 13,
                'group_id' => 168,
                'created_at' => '2019-11-05 13:00:22',
                'updated_at' => '2019-11-06 13:16:06',
            ),
            25 => 
            array (
                'id' => 980,
                'code' => 'EG-SEC-215',
                'user_id' => 1068,
                'school_id' => 13,
                'group_id' => 168,
                'created_at' => '2019-11-05 13:00:22',
                'updated_at' => '2019-11-06 13:16:06',
            ),
            26 => 
            array (
                'id' => 981,
                'code' => 'EG-SEC-216',
                'user_id' => 1069,
                'school_id' => 13,
                'group_id' => 168,
                'created_at' => '2019-11-05 13:00:22',
                'updated_at' => '2019-11-06 13:16:06',
            ),
            27 => 
            array (
                'id' => 982,
                'code' => 'EG-SEC-217',
                'user_id' => 1070,
                'school_id' => 13,
                'group_id' => 168,
                'created_at' => '2019-11-05 13:00:22',
                'updated_at' => '2019-11-06 13:16:06',
            ),
            28 => 
            array (
                'id' => 983,
                'code' => 'EG-SEC-218',
                'user_id' => 1071,
                'school_id' => 13,
                'group_id' => 168,
                'created_at' => '2019-11-05 13:00:22',
                'updated_at' => '2019-11-06 13:16:06',
            ),
            29 => 
            array (
                'id' => 984,
                'code' => 'EG-SEC-219',
                'user_id' => 1072,
                'school_id' => 13,
                'group_id' => 168,
                'created_at' => '2019-11-05 13:00:23',
                'updated_at' => '2019-11-06 13:16:06',
            ),
            30 => 
            array (
                'id' => 985,
                'code' => 'EG-SEC-220',
                'user_id' => 1073,
                'school_id' => 13,
                'group_id' => 168,
                'created_at' => '2019-11-05 13:00:23',
                'updated_at' => '2019-11-06 13:16:06',
            ),
            31 => 
            array (
                'id' => 986,
                'code' => 'EG-SEC-108',
                'user_id' => 1074,
                'school_id' => 13,
                'group_id' => 169,
                'created_at' => '2019-11-06 13:07:29',
                'updated_at' => '2019-11-06 13:15:21',
            ),
            32 => 
            array (
                'id' => 987,
                'code' => 'EG-SEC-109',
                'user_id' => 1075,
                'school_id' => 13,
                'group_id' => 169,
                'created_at' => '2019-11-06 13:07:29',
                'updated_at' => '2019-11-06 13:15:21',
            ),
            33 => 
            array (
                'id' => 988,
                'code' => 'EG-SEC-110',
                'user_id' => 1076,
                'school_id' => 13,
                'group_id' => 169,
                'created_at' => '2019-11-06 13:07:29',
                'updated_at' => '2019-11-06 13:15:21',
            ),
            34 => 
            array (
                'id' => 989,
                'code' => 'EG-SEC-111',
                'user_id' => 1077,
                'school_id' => 13,
                'group_id' => 169,
                'created_at' => '2019-11-06 13:07:29',
                'updated_at' => '2019-11-06 13:15:21',
            ),
            35 => 
            array (
                'id' => 990,
                'code' => 'EG-SEC-112',
                'user_id' => 1078,
                'school_id' => 13,
                'group_id' => 169,
                'created_at' => '2019-11-06 13:07:29',
                'updated_at' => '2019-11-06 13:15:21',
            ),
            36 => 
            array (
                'id' => 991,
                'code' => 'EG-SEC-113',
                'user_id' => 1079,
                'school_id' => 13,
                'group_id' => 169,
                'created_at' => '2019-11-06 13:07:30',
                'updated_at' => '2019-11-06 13:15:21',
            ),
            37 => 
            array (
                'id' => 992,
                'code' => 'EG-SEC-114',
                'user_id' => 1080,
                'school_id' => 13,
                'group_id' => 169,
                'created_at' => '2019-11-06 13:07:30',
                'updated_at' => '2019-11-06 13:15:21',
            ),
            38 => 
            array (
                'id' => 993,
                'code' => 'EG-SEC-115',
                'user_id' => 1081,
                'school_id' => 13,
                'group_id' => 169,
                'created_at' => '2019-11-06 13:07:30',
                'updated_at' => '2019-11-06 13:15:21',
            ),
            39 => 
            array (
                'id' => 994,
                'code' => 'EG-SEC-116',
                'user_id' => 1082,
                'school_id' => 13,
                'group_id' => 169,
                'created_at' => '2019-11-06 13:07:30',
                'updated_at' => '2019-11-06 13:15:21',
            ),
            40 => 
            array (
                'id' => 995,
                'code' => 'EG-SEC-117',
                'user_id' => 1083,
                'school_id' => 13,
                'group_id' => 169,
                'created_at' => '2019-11-06 13:07:30',
                'updated_at' => '2019-11-06 13:15:21',
            ),
            41 => 
            array (
                'id' => 996,
                'code' => 'EG-SEC-118',
                'user_id' => 1084,
                'school_id' => 13,
                'group_id' => 169,
                'created_at' => '2019-11-06 13:07:30',
                'updated_at' => '2019-11-06 13:15:21',
            ),
            42 => 
            array (
                'id' => 997,
                'code' => 'EG-SEC-119',
                'user_id' => 1085,
                'school_id' => 13,
                'group_id' => 169,
                'created_at' => '2019-11-06 13:07:30',
                'updated_at' => '2019-11-06 13:15:21',
            ),
            43 => 
            array (
                'id' => 998,
                'code' => 'EG-SEC-120',
                'user_id' => 1086,
                'school_id' => 13,
                'group_id' => 169,
                'created_at' => '2019-11-06 13:07:30',
                'updated_at' => '2019-11-06 13:15:21',
            ),
            44 => 
            array (
                'id' => 999,
                'code' => 'EG-SEC-121',
                'user_id' => 1087,
                'school_id' => 13,
                'group_id' => 169,
                'created_at' => '2019-11-06 13:07:30',
                'updated_at' => '2019-11-06 13:15:21',
            ),
            45 => 
            array (
                'id' => 1000,
                'code' => 'EG-SEC-122',
                'user_id' => 1088,
                'school_id' => 13,
                'group_id' => 169,
                'created_at' => '2019-11-06 13:07:30',
                'updated_at' => '2019-11-06 13:15:21',
            ),
            46 => 
            array (
                'id' => 1001,
                'code' => 'EG-SEC-123',
                'user_id' => 1089,
                'school_id' => 13,
                'group_id' => 169,
                'created_at' => '2019-11-06 13:07:31',
                'updated_at' => '2019-11-06 13:15:21',
            ),
            47 => 
            array (
                'id' => 1002,
                'code' => 'EG-SEC-124',
                'user_id' => 1090,
                'school_id' => 13,
                'group_id' => 169,
                'created_at' => '2019-11-06 13:07:31',
                'updated_at' => '2019-11-06 13:15:21',
            ),
            48 => 
            array (
                'id' => 1003,
                'code' => 'EG-SEC-125',
                'user_id' => 1091,
                'school_id' => 13,
                'group_id' => 169,
                'created_at' => '2019-11-06 13:07:31',
                'updated_at' => '2019-11-06 13:15:21',
            ),
            49 => 
            array (
                'id' => 1004,
                'code' => 'EG-SEC-126',
                'user_id' => 1092,
                'school_id' => 13,
                'group_id' => 169,
                'created_at' => '2019-11-06 13:07:31',
                'updated_at' => '2019-11-06 13:15:21',
            ),
            50 => 
            array (
                'id' => 1005,
                'code' => 'EG-SEC-127',
                'user_id' => 1093,
                'school_id' => 13,
                'group_id' => 169,
                'created_at' => '2019-11-06 13:07:31',
                'updated_at' => '2019-11-06 13:15:21',
            ),
            51 => 
            array (
                'id' => 1006,
                'code' => 'EG-SEC-128',
                'user_id' => 1094,
                'school_id' => 13,
                'group_id' => 169,
                'created_at' => '2019-11-06 13:07:31',
                'updated_at' => '2019-11-06 13:15:21',
            ),
            52 => 
            array (
                'id' => 1007,
                'code' => 'EG-SEC-129',
                'user_id' => 1095,
                'school_id' => 13,
                'group_id' => 169,
                'created_at' => '2019-11-06 13:07:31',
                'updated_at' => '2019-11-06 13:15:21',
            ),
            53 => 
            array (
                'id' => 1008,
                'code' => 'EG-SEC-130',
                'user_id' => 1096,
                'school_id' => 13,
                'group_id' => 169,
                'created_at' => '2019-11-06 13:07:31',
                'updated_at' => '2019-11-06 13:15:21',
            ),
            54 => 
            array (
                'id' => 1009,
                'code' => 'EG-SEC-131',
                'user_id' => 1097,
                'school_id' => 13,
                'group_id' => 169,
                'created_at' => '2019-11-06 13:07:31',
                'updated_at' => '2019-11-06 13:15:21',
            ),
            55 => 
            array (
                'id' => 1010,
                'code' => 'EG-SEC-132',
                'user_id' => 1098,
                'school_id' => 13,
                'group_id' => 169,
                'created_at' => '2019-11-06 13:07:32',
                'updated_at' => '2019-11-06 13:15:21',
            ),
            56 => 
            array (
                'id' => 1011,
                'code' => 'EG-SEC-133',
                'user_id' => 1099,
                'school_id' => 13,
                'group_id' => 169,
                'created_at' => '2019-11-06 13:07:32',
                'updated_at' => '2019-11-06 13:15:21',
            ),
            57 => 
            array (
                'id' => 1012,
                'code' => 'EG-SEC-134',
                'user_id' => 1100,
                'school_id' => 13,
                'group_id' => 169,
                'created_at' => '2019-11-06 13:07:32',
                'updated_at' => '2019-11-06 13:15:21',
            ),
            58 => 
            array (
                'id' => 1013,
                'code' => 'EG-SEC-135',
                'user_id' => 1101,
                'school_id' => 13,
                'group_id' => 169,
                'created_at' => '2019-11-06 13:07:32',
                'updated_at' => '2019-11-06 13:15:21',
            ),
            59 => 
            array (
                'id' => 1014,
                'code' => 'EG-SEC-136',
                'user_id' => 1102,
                'school_id' => 13,
                'group_id' => 169,
                'created_at' => '2019-11-06 13:07:32',
                'updated_at' => '2019-11-06 13:15:21',
            ),
            60 => 
            array (
                'id' => 1015,
                'code' => 'EG-SEC-137',
                'user_id' => 1103,
                'school_id' => 13,
                'group_id' => 174,
                'created_at' => '2019-11-06 13:08:22',
                'updated_at' => '2019-11-06 13:08:22',
            ),
            61 => 
            array (
                'id' => 1016,
                'code' => 'EG-SEC-138',
                'user_id' => 1104,
                'school_id' => 13,
                'group_id' => 174,
                'created_at' => '2019-11-06 13:08:22',
                'updated_at' => '2019-11-06 13:08:22',
            ),
            62 => 
            array (
                'id' => 1017,
                'code' => 'EG-SEC-139',
                'user_id' => 1105,
                'school_id' => 13,
                'group_id' => 174,
                'created_at' => '2019-11-06 13:08:22',
                'updated_at' => '2019-11-06 13:08:22',
            ),
            63 => 
            array (
                'id' => 1018,
                'code' => 'EG-SEC-140',
                'user_id' => 1106,
                'school_id' => 13,
                'group_id' => 174,
                'created_at' => '2019-11-06 13:08:22',
                'updated_at' => '2019-11-06 13:08:22',
            ),
            64 => 
            array (
                'id' => 1019,
                'code' => 'EG-SEC-141',
                'user_id' => 1107,
                'school_id' => 13,
                'group_id' => 174,
                'created_at' => '2019-11-06 13:08:22',
                'updated_at' => '2019-11-06 13:08:22',
            ),
            65 => 
            array (
                'id' => 1020,
                'code' => 'EG-SEC-142',
                'user_id' => 1108,
                'school_id' => 13,
                'group_id' => 174,
                'created_at' => '2019-11-06 13:08:22',
                'updated_at' => '2019-11-06 13:08:22',
            ),
            66 => 
            array (
                'id' => 1021,
                'code' => 'EG-SEC-143',
                'user_id' => 1109,
                'school_id' => 13,
                'group_id' => 174,
                'created_at' => '2019-11-06 13:08:22',
                'updated_at' => '2019-11-06 13:08:22',
            ),
            67 => 
            array (
                'id' => 1022,
                'code' => 'EG-SEC-144',
                'user_id' => 1110,
                'school_id' => 13,
                'group_id' => 174,
                'created_at' => '2019-11-06 13:08:23',
                'updated_at' => '2019-11-06 13:08:23',
            ),
            68 => 
            array (
                'id' => 1023,
                'code' => 'EG-SEC-145',
                'user_id' => 1111,
                'school_id' => 13,
                'group_id' => 174,
                'created_at' => '2019-11-06 13:08:23',
                'updated_at' => '2019-11-06 13:08:23',
            ),
            69 => 
            array (
                'id' => 1024,
                'code' => 'EG-SEC-146',
                'user_id' => 1112,
                'school_id' => 13,
                'group_id' => 174,
                'created_at' => '2019-11-06 13:08:23',
                'updated_at' => '2019-11-06 13:08:23',
            ),
            70 => 
            array (
                'id' => 1025,
                'code' => 'EG-SEC-147',
                'user_id' => 1113,
                'school_id' => 13,
                'group_id' => 174,
                'created_at' => '2019-11-06 13:08:23',
                'updated_at' => '2019-11-06 13:08:23',
            ),
            71 => 
            array (
                'id' => 1026,
                'code' => 'EG-SEC-148',
                'user_id' => 1114,
                'school_id' => 13,
                'group_id' => 174,
                'created_at' => '2019-11-06 13:08:23',
                'updated_at' => '2019-11-06 13:08:23',
            ),
            72 => 
            array (
                'id' => 1027,
                'code' => 'EG-SEC-149',
                'user_id' => 1115,
                'school_id' => 13,
                'group_id' => 174,
                'created_at' => '2019-11-06 13:08:23',
                'updated_at' => '2019-11-06 13:08:23',
            ),
            73 => 
            array (
                'id' => 1028,
                'code' => 'EG-SEC-150',
                'user_id' => 1116,
                'school_id' => 13,
                'group_id' => 174,
                'created_at' => '2019-11-06 13:08:23',
                'updated_at' => '2019-11-06 13:08:23',
            ),
            74 => 
            array (
                'id' => 1029,
                'code' => 'EG-SEC-151',
                'user_id' => 1117,
                'school_id' => 13,
                'group_id' => 174,
                'created_at' => '2019-11-06 13:08:23',
                'updated_at' => '2019-11-06 13:08:23',
            ),
            75 => 
            array (
                'id' => 1030,
                'code' => 'EG-SEC-152',
                'user_id' => 1118,
                'school_id' => 13,
                'group_id' => 174,
                'created_at' => '2019-11-06 13:08:23',
                'updated_at' => '2019-11-06 13:08:23',
            ),
            76 => 
            array (
                'id' => 1031,
                'code' => 'EG-SEC-153',
                'user_id' => 1119,
                'school_id' => 13,
                'group_id' => 174,
                'created_at' => '2019-11-06 13:08:23',
                'updated_at' => '2019-11-06 13:08:23',
            ),
            77 => 
            array (
                'id' => 1032,
                'code' => 'EG-SEC-154',
                'user_id' => 1120,
                'school_id' => 13,
                'group_id' => 174,
                'created_at' => '2019-11-06 13:08:24',
                'updated_at' => '2019-11-06 13:08:24',
            ),
            78 => 
            array (
                'id' => 1033,
                'code' => 'EG-SEC-155',
                'user_id' => 1121,
                'school_id' => 13,
                'group_id' => 174,
                'created_at' => '2019-11-06 13:08:24',
                'updated_at' => '2019-11-06 13:08:24',
            ),
            79 => 
            array (
                'id' => 1034,
                'code' => 'EG-SEC-156',
                'user_id' => 1122,
                'school_id' => 13,
                'group_id' => 174,
                'created_at' => '2019-11-06 13:08:24',
                'updated_at' => '2019-11-06 13:08:24',
            ),
            80 => 
            array (
                'id' => 1035,
                'code' => 'EG-SEC-157',
                'user_id' => 1123,
                'school_id' => 13,
                'group_id' => 174,
                'created_at' => '2019-11-06 13:08:24',
                'updated_at' => '2019-11-06 13:08:24',
            ),
            81 => 
            array (
                'id' => 1036,
                'code' => 'EG-SEC-158',
                'user_id' => 1124,
                'school_id' => 13,
                'group_id' => 174,
                'created_at' => '2019-11-06 13:08:24',
                'updated_at' => '2019-11-06 13:08:24',
            ),
            82 => 
            array (
                'id' => 1037,
                'code' => 'EG-SEC-159',
                'user_id' => 1125,
                'school_id' => 13,
                'group_id' => 174,
                'created_at' => '2019-11-06 13:08:24',
                'updated_at' => '2019-11-06 13:08:24',
            ),
            83 => 
            array (
                'id' => 1038,
                'code' => 'EG-SEC-160',
                'user_id' => 1126,
                'school_id' => 13,
                'group_id' => 174,
                'created_at' => '2019-11-06 13:08:24',
                'updated_at' => '2019-11-06 13:08:24',
            ),
            84 => 
            array (
                'id' => 1039,
                'code' => 'EG-SEC-161',
                'user_id' => 1127,
                'school_id' => 13,
                'group_id' => 174,
                'created_at' => '2019-11-06 13:08:24',
                'updated_at' => '2019-11-06 13:08:24',
            ),
            85 => 
            array (
                'id' => 1040,
                'code' => 'EG-SEC-162',
                'user_id' => 1128,
                'school_id' => 13,
                'group_id' => 174,
                'created_at' => '2019-11-06 13:08:24',
                'updated_at' => '2019-11-06 13:08:24',
            ),
            86 => 
            array (
                'id' => 1041,
                'code' => 'EG-SEC-163',
                'user_id' => 1129,
                'school_id' => 13,
                'group_id' => 174,
                'created_at' => '2019-11-06 13:08:24',
                'updated_at' => '2019-11-06 13:08:24',
            ),
            87 => 
            array (
                'id' => 1042,
                'code' => 'EG-SEC-164',
                'user_id' => 1130,
                'school_id' => 13,
                'group_id' => 174,
                'created_at' => '2019-11-06 13:08:25',
                'updated_at' => '2019-11-06 13:08:25',
            ),
            88 => 
            array (
                'id' => 1043,
                'code' => 'EG-SEC-165',
                'user_id' => 1131,
                'school_id' => 13,
                'group_id' => 170,
                'created_at' => '2019-11-06 13:09:30',
                'updated_at' => '2019-11-06 13:15:57',
            ),
            89 => 
            array (
                'id' => 1044,
                'code' => 'EG-SEC-166',
                'user_id' => 1132,
                'school_id' => 13,
                'group_id' => 170,
                'created_at' => '2019-11-06 13:09:30',
                'updated_at' => '2019-11-06 13:15:57',
            ),
            90 => 
            array (
                'id' => 1045,
                'code' => 'EG-SEC-167',
                'user_id' => 1133,
                'school_id' => 13,
                'group_id' => 170,
                'created_at' => '2019-11-06 13:09:30',
                'updated_at' => '2019-11-06 13:15:57',
            ),
            91 => 
            array (
                'id' => 1046,
                'code' => 'EG-SEC-168',
                'user_id' => 1134,
                'school_id' => 13,
                'group_id' => 170,
                'created_at' => '2019-11-06 13:09:30',
                'updated_at' => '2019-11-06 13:15:57',
            ),
            92 => 
            array (
                'id' => 1047,
                'code' => 'EG-SEC-169',
                'user_id' => 1135,
                'school_id' => 13,
                'group_id' => 170,
                'created_at' => '2019-11-06 13:09:30',
                'updated_at' => '2019-11-06 13:15:57',
            ),
            93 => 
            array (
                'id' => 1048,
                'code' => 'EG-SEC-170',
                'user_id' => 1136,
                'school_id' => 13,
                'group_id' => 170,
                'created_at' => '2019-11-06 13:09:30',
                'updated_at' => '2019-11-06 13:15:57',
            ),
            94 => 
            array (
                'id' => 1049,
                'code' => 'EG-SEC-171',
                'user_id' => 1137,
                'school_id' => 13,
                'group_id' => 170,
                'created_at' => '2019-11-06 13:09:30',
                'updated_at' => '2019-11-06 13:15:57',
            ),
            95 => 
            array (
                'id' => 1050,
                'code' => 'EG-SEC-172',
                'user_id' => 1138,
                'school_id' => 13,
                'group_id' => 170,
                'created_at' => '2019-11-06 13:09:30',
                'updated_at' => '2019-11-06 13:15:57',
            ),
            96 => 
            array (
                'id' => 1051,
                'code' => 'EG-SEC-173',
                'user_id' => 1139,
                'school_id' => 13,
                'group_id' => 170,
                'created_at' => '2019-11-06 13:09:31',
                'updated_at' => '2019-11-06 13:15:57',
            ),
            97 => 
            array (
                'id' => 1052,
                'code' => 'EG-SEC-174',
                'user_id' => 1140,
                'school_id' => 13,
                'group_id' => 170,
                'created_at' => '2019-11-06 13:09:31',
                'updated_at' => '2019-11-06 13:15:57',
            ),
            98 => 
            array (
                'id' => 1053,
                'code' => 'EG-SEC-175',
                'user_id' => 1141,
                'school_id' => 13,
                'group_id' => 170,
                'created_at' => '2019-11-06 13:09:31',
                'updated_at' => '2019-11-06 13:15:57',
            ),
            99 => 
            array (
                'id' => 1054,
                'code' => 'EG-SEC-176',
                'user_id' => 1142,
                'school_id' => 13,
                'group_id' => 170,
                'created_at' => '2019-11-06 13:09:31',
                'updated_at' => '2019-11-06 13:15:57',
            ),
            100 => 
            array (
                'id' => 1055,
                'code' => 'EG-SEC-177',
                'user_id' => 1143,
                'school_id' => 13,
                'group_id' => 170,
                'created_at' => '2019-11-06 13:09:31',
                'updated_at' => '2019-11-06 13:15:57',
            ),
            101 => 
            array (
                'id' => 1056,
                'code' => 'EG-SEC-178',
                'user_id' => 1144,
                'school_id' => 13,
                'group_id' => 170,
                'created_at' => '2019-11-06 13:09:31',
                'updated_at' => '2019-11-06 13:15:57',
            ),
            102 => 
            array (
                'id' => 1057,
                'code' => 'EG-SEC-179',
                'user_id' => 1145,
                'school_id' => 13,
                'group_id' => 170,
                'created_at' => '2019-11-06 13:09:31',
                'updated_at' => '2019-11-06 13:15:57',
            ),
            103 => 
            array (
                'id' => 1058,
                'code' => 'EG-SEC-180',
                'user_id' => 1146,
                'school_id' => 13,
                'group_id' => 170,
                'created_at' => '2019-11-06 13:09:31',
                'updated_at' => '2019-11-06 13:15:57',
            ),
            104 => 
            array (
                'id' => 1059,
                'code' => 'EG-SEC-181',
                'user_id' => 1147,
                'school_id' => 13,
                'group_id' => 170,
                'created_at' => '2019-11-06 13:09:31',
                'updated_at' => '2019-11-06 13:15:57',
            ),
            105 => 
            array (
                'id' => 1060,
                'code' => 'EG-SEC-182',
                'user_id' => 1148,
                'school_id' => 13,
                'group_id' => 170,
                'created_at' => '2019-11-06 13:09:32',
                'updated_at' => '2019-11-06 13:15:57',
            ),
            106 => 
            array (
                'id' => 1061,
                'code' => 'EG-SEC-183',
                'user_id' => 1149,
                'school_id' => 13,
                'group_id' => 170,
                'created_at' => '2019-11-06 13:09:32',
                'updated_at' => '2019-11-06 13:15:57',
            ),
            107 => 
            array (
                'id' => 1062,
                'code' => 'EG-SEC-184',
                'user_id' => 1150,
                'school_id' => 13,
                'group_id' => 170,
                'created_at' => '2019-11-06 13:09:32',
                'updated_at' => '2019-11-06 13:15:57',
            ),
            108 => 
            array (
                'id' => 1063,
                'code' => 'EG-SEC-185',
                'user_id' => 1151,
                'school_id' => 13,
                'group_id' => 170,
                'created_at' => '2019-11-06 13:09:32',
                'updated_at' => '2019-11-06 13:15:57',
            ),
            109 => 
            array (
                'id' => 1064,
                'code' => 'EG-SEC-186',
                'user_id' => 1152,
                'school_id' => 13,
                'group_id' => 170,
                'created_at' => '2019-11-06 13:09:32',
                'updated_at' => '2019-11-06 13:15:57',
            ),
            110 => 
            array (
                'id' => 1065,
                'code' => 'EG-SEC-187',
                'user_id' => 1153,
                'school_id' => 13,
                'group_id' => 170,
                'created_at' => '2019-11-06 13:09:32',
                'updated_at' => '2019-11-06 13:15:57',
            ),
            111 => 
            array (
                'id' => 1066,
                'code' => 'EG-SEC-188',
                'user_id' => 1154,
                'school_id' => 13,
                'group_id' => 170,
                'created_at' => '2019-11-06 13:09:32',
                'updated_at' => '2019-11-06 13:15:57',
            ),
            112 => 
            array (
                'id' => 1067,
                'code' => 'EG-SEC-189',
                'user_id' => 1155,
                'school_id' => 13,
                'group_id' => 170,
                'created_at' => '2019-11-06 13:09:32',
                'updated_at' => '2019-11-06 13:15:57',
            ),
            113 => 
            array (
                'id' => 1068,
                'code' => 'EG-SEC-190',
                'user_id' => 1156,
                'school_id' => 13,
                'group_id' => 170,
                'created_at' => '2019-11-06 13:09:32',
                'updated_at' => '2019-11-06 13:15:57',
            ),
            114 => 
            array (
                'id' => 1069,
                'code' => 'EG-SEC-191',
                'user_id' => 1157,
                'school_id' => 13,
                'group_id' => 170,
                'created_at' => '2019-11-06 13:09:32',
                'updated_at' => '2019-11-06 13:15:57',
            ),
            115 => 
            array (
                'id' => 1070,
                'code' => 'EG-SEC-192',
                'user_id' => 1158,
                'school_id' => 13,
                'group_id' => 170,
                'created_at' => '2019-11-06 13:09:33',
                'updated_at' => '2019-11-06 13:15:57',
            ),
            116 => 
            array (
                'id' => 1106,
                'code' => '235689',
                'user_id' => 1196,
                'school_id' => 83,
                'group_id' => 265,
                'created_at' => '2019-11-26 11:53:05',
                'updated_at' => '2019-12-18 17:24:13',
            ),
            117 => 
            array (
                'id' => 1107,
                'code' => '235689',
                'user_id' => 1197,
                'school_id' => 83,
                'group_id' => 265,
                'created_at' => '2019-11-26 11:53:05',
                'updated_at' => '2019-12-18 17:24:14',
            ),
            118 => 
            array (
                'id' => 1108,
                'code' => '235689',
                'user_id' => 1198,
                'school_id' => 83,
                'group_id' => 265,
                'created_at' => '2019-11-26 11:53:05',
                'updated_at' => '2019-12-18 17:24:14',
            ),
            119 => 
            array (
                'id' => 1109,
                'code' => '235689',
                'user_id' => 1199,
                'school_id' => 83,
                'group_id' => 265,
                'created_at' => '2019-11-26 11:53:05',
                'updated_at' => '2019-12-18 17:24:14',
            ),
            120 => 
            array (
                'id' => 1110,
                'code' => '235689',
                'user_id' => 1200,
                'school_id' => 83,
                'group_id' => 265,
                'created_at' => '2019-11-26 11:53:05',
                'updated_at' => '2019-12-18 17:24:14',
            ),
            121 => 
            array (
                'id' => 1111,
                'code' => '235689',
                'user_id' => 1201,
                'school_id' => 83,
                'group_id' => 265,
                'created_at' => '2019-11-26 11:53:05',
                'updated_at' => '2019-12-18 17:24:14',
            ),
            122 => 
            array (
                'id' => 1112,
                'code' => '235689',
                'user_id' => 1202,
                'school_id' => 83,
                'group_id' => 265,
                'created_at' => '2019-11-26 11:53:05',
                'updated_at' => '2019-12-18 17:24:14',
            ),
            123 => 
            array (
                'id' => 1113,
                'code' => '235689',
                'user_id' => 1203,
                'school_id' => 83,
                'group_id' => 265,
                'created_at' => '2019-11-26 11:53:06',
                'updated_at' => '2019-12-18 17:24:14',
            ),
            124 => 
            array (
                'id' => 1114,
                'code' => '235689',
                'user_id' => 1204,
                'school_id' => 83,
                'group_id' => 265,
                'created_at' => '2019-11-26 11:53:06',
                'updated_at' => '2019-12-18 17:24:14',
            ),
            125 => 
            array (
                'id' => 1115,
                'code' => '235689',
                'user_id' => 1205,
                'school_id' => 83,
                'group_id' => 265,
                'created_at' => '2019-11-26 11:53:06',
                'updated_at' => '2019-12-18 17:24:14',
            ),
            126 => 
            array (
                'id' => 1116,
                'code' => '235689',
                'user_id' => 1206,
                'school_id' => 83,
                'group_id' => 265,
                'created_at' => '2019-11-26 11:53:06',
                'updated_at' => '2019-12-18 17:24:14',
            ),
            127 => 
            array (
                'id' => 1117,
                'code' => '235689',
                'user_id' => 1207,
                'school_id' => 83,
                'group_id' => 265,
                'created_at' => '2019-11-26 11:53:06',
                'updated_at' => '2019-12-18 17:24:14',
            ),
            128 => 
            array (
                'id' => 1167,
                'code' => NULL,
                'user_id' => 1257,
                'school_id' => 74,
                'group_id' => 212,
                'created_at' => '2019-11-26 11:59:57',
                'updated_at' => '2019-11-27 12:39:07',
            ),
            129 => 
            array (
                'id' => 1168,
                'code' => '148836',
                'user_id' => 1258,
                'school_id' => 83,
                'group_id' => 264,
                'created_at' => '2019-11-26 11:59:58',
                'updated_at' => '2019-12-18 17:21:15',
            ),
            130 => 
            array (
                'id' => 1169,
                'code' => '148836',
                'user_id' => 1259,
                'school_id' => 83,
                'group_id' => 264,
                'created_at' => '2019-11-26 11:59:58',
                'updated_at' => '2019-12-18 17:21:15',
            ),
            131 => 
            array (
                'id' => 1170,
                'code' => '148836',
                'user_id' => 1260,
                'school_id' => 83,
                'group_id' => 264,
                'created_at' => '2019-11-26 11:59:58',
                'updated_at' => '2019-12-18 17:21:15',
            ),
            132 => 
            array (
                'id' => 1171,
                'code' => '148836',
                'user_id' => 1261,
                'school_id' => 83,
                'group_id' => 264,
                'created_at' => '2019-11-26 11:59:58',
                'updated_at' => '2019-12-18 17:21:15',
            ),
            133 => 
            array (
                'id' => 1172,
                'code' => '148836',
                'user_id' => 1262,
                'school_id' => 83,
                'group_id' => 264,
                'created_at' => '2019-11-26 11:59:58',
                'updated_at' => '2019-12-18 17:21:15',
            ),
            134 => 
            array (
                'id' => 1173,
                'code' => NULL,
                'user_id' => 1263,
                'school_id' => 75,
                'group_id' => 213,
                'created_at' => '2019-11-26 12:25:50',
                'updated_at' => '2019-11-27 12:39:16',
            ),
            135 => 
            array (
                'id' => 1174,
                'code' => NULL,
                'user_id' => 1264,
                'school_id' => 75,
                'group_id' => 213,
                'created_at' => '2019-11-26 12:25:50',
                'updated_at' => '2019-11-27 12:39:16',
            ),
            136 => 
            array (
                'id' => 1175,
                'code' => NULL,
                'user_id' => 1265,
                'school_id' => 75,
                'group_id' => 213,
                'created_at' => '2019-11-26 12:25:50',
                'updated_at' => '2019-11-27 12:39:16',
            ),
            137 => 
            array (
                'id' => 1176,
                'code' => NULL,
                'user_id' => 1266,
                'school_id' => 75,
                'group_id' => 213,
                'created_at' => '2019-11-26 12:25:51',
                'updated_at' => '2019-11-27 12:39:16',
            ),
            138 => 
            array (
                'id' => 1177,
                'code' => NULL,
                'user_id' => 1267,
                'school_id' => 75,
                'group_id' => 213,
                'created_at' => '2019-11-26 12:25:51',
                'updated_at' => '2019-11-27 12:39:16',
            ),
            139 => 
            array (
                'id' => 1226,
                'code' => '1002',
                'user_id' => 1316,
                'school_id' => 78,
                'group_id' => 222,
                'created_at' => '2019-12-10 09:37:37',
                'updated_at' => '2019-12-10 09:37:37',
            ),
            140 => 
            array (
                'id' => 1227,
                'code' => '1002',
                'user_id' => 1317,
                'school_id' => 78,
                'group_id' => 222,
                'created_at' => '2019-12-10 09:37:37',
                'updated_at' => '2019-12-10 09:37:37',
            ),
            141 => 
            array (
                'id' => 1228,
                'code' => '1002',
                'user_id' => 1318,
                'school_id' => 78,
                'group_id' => 222,
                'created_at' => '2019-12-10 09:37:38',
                'updated_at' => '2019-12-10 09:37:38',
            ),
            142 => 
            array (
                'id' => 1229,
                'code' => 'Codigo',
                'user_id' => 1320,
                'school_id' => 79,
                'group_id' => 223,
                'created_at' => '2019-12-11 08:05:45',
                'updated_at' => '2019-12-11 08:05:45',
            ),
            143 => 
            array (
                'id' => 1245,
                'code' => 'EE.017',
                'user_id' => 1336,
                'school_id' => 8,
                'group_id' => 226,
                'created_at' => '2019-12-11 08:18:32',
                'updated_at' => '2019-12-11 08:18:32',
            ),
            144 => 
            array (
                'id' => 1246,
                'code' => 'EE.003',
                'user_id' => 1337,
                'school_id' => 8,
                'group_id' => 226,
                'created_at' => '2019-12-11 08:18:32',
                'updated_at' => '2019-12-11 08:18:32',
            ),
            145 => 
            array (
                'id' => 1247,
                'code' => 'EE.004',
                'user_id' => 1338,
                'school_id' => 8,
                'group_id' => 226,
                'created_at' => '2019-12-11 08:18:32',
                'updated_at' => '2019-12-11 08:18:32',
            ),
            146 => 
            array (
                'id' => 1248,
                'code' => 'EE.005',
                'user_id' => 1339,
                'school_id' => 8,
                'group_id' => 226,
                'created_at' => '2019-12-11 08:18:33',
                'updated_at' => '2019-12-11 08:18:33',
            ),
            147 => 
            array (
                'id' => 1249,
                'code' => 'EE.015',
                'user_id' => 1340,
                'school_id' => 8,
                'group_id' => 227,
                'created_at' => '2019-12-11 08:18:33',
                'updated_at' => '2019-12-11 08:18:44',
            ),
            148 => 
            array (
                'id' => 1250,
                'code' => 'EE.BAC.001',
                'user_id' => 1341,
                'school_id' => 9,
                'group_id' => 229,
                'created_at' => '2019-12-11 08:18:33',
                'updated_at' => '2019-12-11 08:27:55',
            ),
            149 => 
            array (
                'id' => 1251,
                'code' => 'EE.008',
                'user_id' => 1342,
                'school_id' => 8,
                'group_id' => 226,
                'created_at' => '2019-12-11 08:18:33',
                'updated_at' => '2019-12-11 08:18:33',
            ),
            150 => 
            array (
                'id' => 1252,
                'code' => 'EE.009',
                'user_id' => 1343,
                'school_id' => 8,
                'group_id' => 226,
                'created_at' => '2019-12-11 08:18:33',
                'updated_at' => '2019-12-11 08:18:33',
            ),
            151 => 
            array (
                'id' => 1253,
                'code' => 'EE.010',
                'user_id' => 1344,
                'school_id' => 8,
                'group_id' => 226,
                'created_at' => '2019-12-11 08:18:33',
                'updated_at' => '2019-12-11 08:18:33',
            ),
            152 => 
            array (
                'id' => 1254,
                'code' => 'EE.011',
                'user_id' => 1345,
                'school_id' => 8,
                'group_id' => 226,
                'created_at' => '2019-12-11 08:18:33',
                'updated_at' => '2019-12-11 08:18:33',
            ),
            153 => 
            array (
                'id' => 1255,
                'code' => 'EE.012',
                'user_id' => 1346,
                'school_id' => 8,
                'group_id' => 227,
                'created_at' => '2019-12-11 08:18:44',
                'updated_at' => '2019-12-11 08:18:44',
            ),
            154 => 
            array (
                'id' => 1256,
                'code' => 'EE.013',
                'user_id' => 1347,
                'school_id' => 8,
                'group_id' => 227,
                'created_at' => '2019-12-11 08:18:44',
                'updated_at' => '2019-12-11 08:18:44',
            ),
            155 => 
            array (
                'id' => 1257,
                'code' => 'EE.014',
                'user_id' => 1348,
                'school_id' => 8,
                'group_id' => 227,
                'created_at' => '2019-12-11 08:18:44',
                'updated_at' => '2019-12-11 08:18:44',
            ),
            156 => 
            array (
                'id' => 1258,
                'code' => 'EE.016',
                'user_id' => 1349,
                'school_id' => 8,
                'group_id' => 227,
                'created_at' => '2019-12-11 08:18:44',
                'updated_at' => '2019-12-11 08:18:44',
            ),
            157 => 
            array (
                'id' => 1259,
                'code' => 'EE.018',
                'user_id' => 1350,
                'school_id' => 8,
                'group_id' => 227,
                'created_at' => '2019-12-11 08:18:44',
                'updated_at' => '2019-12-11 08:18:44',
            ),
            158 => 
            array (
                'id' => 1260,
                'code' => 'EE.SEC.001',
                'user_id' => 1351,
                'school_id' => 2,
                'group_id' => 228,
                'created_at' => '2019-12-11 08:23:07',
                'updated_at' => '2019-12-11 08:23:07',
            ),
            159 => 
            array (
                'id' => 1261,
                'code' => 'EE.SEC.002',
                'user_id' => 1352,
                'school_id' => 2,
                'group_id' => 228,
                'created_at' => '2019-12-11 08:23:07',
                'updated_at' => '2019-12-11 08:23:07',
            ),
            160 => 
            array (
                'id' => 1262,
                'code' => 'EE.SEC.003',
                'user_id' => 1353,
                'school_id' => 2,
                'group_id' => 228,
                'created_at' => '2019-12-11 08:23:07',
                'updated_at' => '2019-12-11 08:23:07',
            ),
            161 => 
            array (
                'id' => 1263,
                'code' => 'EE.SEC.004',
                'user_id' => 1354,
                'school_id' => 2,
                'group_id' => 228,
                'created_at' => '2019-12-11 08:23:08',
                'updated_at' => '2019-12-11 08:23:08',
            ),
            162 => 
            array (
                'id' => 1264,
                'code' => 'EE.SEC.005',
                'user_id' => 1355,
                'school_id' => 2,
                'group_id' => 228,
                'created_at' => '2019-12-11 08:23:08',
                'updated_at' => '2019-12-11 08:23:08',
            ),
            163 => 
            array (
                'id' => 1265,
                'code' => 'EE.BAC.002',
                'user_id' => 1356,
                'school_id' => 9,
                'group_id' => 229,
                'created_at' => '2019-12-11 08:27:55',
                'updated_at' => '2019-12-11 08:27:55',
            ),
            164 => 
            array (
                'id' => 1266,
                'code' => 'EE.BAC.003',
                'user_id' => 1357,
                'school_id' => 9,
                'group_id' => 229,
                'created_at' => '2019-12-11 08:27:56',
                'updated_at' => '2019-12-11 08:27:56',
            ),
            165 => 
            array (
                'id' => 1267,
                'code' => 'EE.BAC.004',
                'user_id' => 1358,
                'school_id' => 9,
                'group_id' => 229,
                'created_at' => '2019-12-11 08:27:56',
                'updated_at' => '2019-12-11 08:27:56',
            ),
            166 => 
            array (
                'id' => 1268,
                'code' => 'EE.BAC.005',
                'user_id' => 1359,
                'school_id' => 9,
                'group_id' => 229,
                'created_at' => '2019-12-11 08:27:56',
                'updated_at' => '2019-12-11 08:27:56',
            ),
            167 => 
            array (
                'id' => 1269,
                'code' => 'EE.BAC.006',
                'user_id' => 1360,
                'school_id' => 9,
                'group_id' => 229,
                'created_at' => '2019-12-11 08:27:56',
                'updated_at' => '2019-12-11 08:27:56',
            ),
            168 => 
            array (
                'id' => 1270,
                'code' => 'EE.BAC.007',
                'user_id' => 1361,
                'school_id' => 9,
                'group_id' => 229,
                'created_at' => '2019-12-11 08:27:56',
                'updated_at' => '2019-12-11 08:27:56',
            ),
            169 => 
            array (
                'id' => 1271,
                'code' => 'EE.BAC.008',
                'user_id' => 1362,
                'school_id' => 9,
                'group_id' => 229,
                'created_at' => '2019-12-11 08:27:56',
                'updated_at' => '2019-12-11 08:27:56',
            ),
            170 => 
            array (
                'id' => 1272,
                'code' => 'EE.BAC.009',
                'user_id' => 1363,
                'school_id' => 9,
                'group_id' => 229,
                'created_at' => '2019-12-11 08:27:56',
                'updated_at' => '2019-12-11 08:27:56',
            ),
            171 => 
            array (
                'id' => 1273,
                'code' => 'EE.BAC.010',
                'user_id' => 1364,
                'school_id' => 9,
                'group_id' => 229,
                'created_at' => '2019-12-11 08:27:56',
                'updated_at' => '2019-12-11 08:27:56',
            ),
            172 => 
            array (
                'id' => 1274,
                'code' => 'EE.BAC.011',
                'user_id' => 1365,
                'school_id' => 9,
                'group_id' => 229,
                'created_at' => '2019-12-11 08:27:56',
                'updated_at' => '2019-12-11 08:27:56',
            ),
            173 => 
            array (
                'id' => 1275,
                'code' => 'EE.BAC.012',
                'user_id' => 1366,
                'school_id' => 9,
                'group_id' => 229,
                'created_at' => '2019-12-11 08:27:57',
                'updated_at' => '2019-12-11 08:27:57',
            ),
            174 => 
            array (
                'id' => 1276,
                'code' => 'EE.BAC.013',
                'user_id' => 1367,
                'school_id' => 9,
                'group_id' => 229,
                'created_at' => '2019-12-11 08:27:57',
                'updated_at' => '2019-12-11 08:27:57',
            ),
            175 => 
            array (
                'id' => 1338,
                'code' => NULL,
                'user_id' => 1429,
                'school_id' => 3,
                'group_id' => 236,
                'created_at' => '2019-12-11 10:26:27',
                'updated_at' => '2019-12-11 10:26:27',
            ),
            176 => 
            array (
                'id' => 1339,
                'code' => NULL,
                'user_id' => 1430,
                'school_id' => 3,
                'group_id' => 236,
                'created_at' => '2019-12-11 10:27:41',
                'updated_at' => '2019-12-11 10:27:41',
            ),
            177 => 
            array (
                'id' => 1340,
                'code' => NULL,
                'user_id' => 1431,
                'school_id' => 75,
                'group_id' => 236,
                'created_at' => '2019-12-11 10:28:37',
                'updated_at' => '2019-12-11 10:28:37',
            ),
            178 => 
            array (
                'id' => 1341,
                'code' => NULL,
                'user_id' => 1432,
                'school_id' => 75,
                'group_id' => 236,
                'created_at' => '2019-12-11 10:29:02',
                'updated_at' => '2019-12-11 10:29:02',
            ),
            179 => 
            array (
                'id' => 1342,
                'code' => NULL,
                'user_id' => 1433,
                'school_id' => 75,
                'group_id' => 236,
                'created_at' => '2019-12-11 10:29:18',
                'updated_at' => '2019-12-11 10:29:18',
            ),
            180 => 
            array (
                'id' => 1343,
                'code' => NULL,
                'user_id' => 1434,
                'school_id' => 75,
                'group_id' => 236,
                'created_at' => '2019-12-11 10:29:41',
                'updated_at' => '2019-12-11 10:29:41',
            ),
            181 => 
            array (
                'id' => 1344,
                'code' => NULL,
                'user_id' => 1435,
                'school_id' => 75,
                'group_id' => 236,
                'created_at' => '2019-12-11 10:30:39',
                'updated_at' => '2019-12-11 10:30:39',
            ),
            182 => 
            array (
                'id' => 1345,
                'code' => NULL,
                'user_id' => 1436,
                'school_id' => 75,
                'group_id' => 236,
                'created_at' => '2019-12-11 10:30:56',
                'updated_at' => '2019-12-11 10:30:56',
            ),
            183 => 
            array (
                'id' => 1346,
                'code' => NULL,
                'user_id' => 1438,
                'school_id' => 75,
                'group_id' => 236,
                'created_at' => '2019-12-11 10:31:11',
                'updated_at' => '2019-12-11 10:31:11',
            ),
            184 => 
            array (
                'id' => 1347,
                'code' => NULL,
                'user_id' => 1439,
                'school_id' => 75,
                'group_id' => 236,
                'created_at' => '2019-12-11 10:31:24',
                'updated_at' => '2019-12-11 10:31:24',
            ),
            185 => 
            array (
                'id' => 1348,
                'code' => NULL,
                'user_id' => 1440,
                'school_id' => 75,
                'group_id' => 236,
                'created_at' => '2019-12-11 10:31:40',
                'updated_at' => '2019-12-11 10:31:40',
            ),
            186 => 
            array (
                'id' => 1378,
                'code' => NULL,
                'user_id' => 1470,
                'school_id' => 11,
                'group_id' => 241,
                'created_at' => '2019-12-12 13:10:36',
                'updated_at' => '2019-12-12 13:10:36',
            ),
            187 => 
            array (
                'id' => 1411,
                'code' => NULL,
                'user_id' => 1335,
                'school_id' => 8,
                'group_id' => 242,
                'created_at' => '2019-12-12 14:57:47',
                'updated_at' => '2019-12-12 14:57:47',
            ),
            188 => 
            array (
                'id' => 1412,
                'code' => NULL,
                'user_id' => 1334,
                'school_id' => 8,
                'group_id' => 242,
                'created_at' => '2019-12-12 14:58:54',
                'updated_at' => '2019-12-12 14:58:54',
            ),
            189 => 
            array (
                'id' => 1413,
                'code' => NULL,
                'user_id' => 1333,
                'school_id' => 8,
                'group_id' => 242,
                'created_at' => '2019-12-12 14:59:24',
                'updated_at' => '2019-12-12 14:59:24',
            ),
            190 => 
            array (
                'id' => 1414,
                'code' => 'EX-PB-001',
                'user_id' => 944,
                'school_id' => 6,
                'group_id' => 243,
                'created_at' => '2019-12-12 16:16:17',
                'updated_at' => '2019-12-12 16:16:17',
            ),
            191 => 
            array (
                'id' => 1415,
                'code' => 'EX-PB-002',
                'user_id' => 180,
                'school_id' => 6,
                'group_id' => 243,
                'created_at' => '2019-12-12 16:17:01',
                'updated_at' => '2019-12-12 16:17:01',
            ),
            192 => 
            array (
                'id' => 1416,
                'code' => 'EX-PB-003',
                'user_id' => 184,
                'school_id' => 6,
                'group_id' => 243,
                'created_at' => '2019-12-12 16:17:30',
                'updated_at' => '2019-12-12 16:17:30',
            ),
            193 => 
            array (
                'id' => 1417,
                'code' => 'EX-PB-004',
                'user_id' => 946,
                'school_id' => 6,
                'group_id' => 243,
                'created_at' => '2019-12-12 16:18:03',
                'updated_at' => '2019-12-12 16:18:03',
            ),
            194 => 
            array (
                'id' => 1418,
                'code' => 'EX-PB-005',
                'user_id' => 1445,
                'school_id' => 6,
                'group_id' => 243,
                'created_at' => '2019-12-12 16:18:32',
                'updated_at' => '2019-12-12 16:18:32',
            ),
            195 => 
            array (
                'id' => 1419,
                'code' => 'EX-PB-006',
                'user_id' => 209,
                'school_id' => 6,
                'group_id' => 243,
                'created_at' => '2019-12-12 16:19:03',
                'updated_at' => '2019-12-12 16:19:03',
            ),
            196 => 
            array (
                'id' => 1420,
                'code' => 'EX-PB-007',
                'user_id' => 1447,
                'school_id' => 6,
                'group_id' => 243,
                'created_at' => '2019-12-12 16:19:33',
                'updated_at' => '2019-12-12 16:19:33',
            ),
            197 => 
            array (
                'id' => 1421,
                'code' => 'EX-PB-008',
                'user_id' => 1448,
                'school_id' => 6,
                'group_id' => 244,
                'created_at' => '2019-12-12 16:20:03',
                'updated_at' => '2019-12-12 16:20:03',
            ),
            198 => 
            array (
                'id' => 1422,
                'code' => 'EX-PB-009',
                'user_id' => 1449,
                'school_id' => 6,
                'group_id' => 244,
                'created_at' => '2019-12-12 16:20:29',
                'updated_at' => '2019-12-12 16:20:29',
            ),
            199 => 
            array (
                'id' => 1423,
                'code' => 'EX-PB-010',
                'user_id' => 1450,
                'school_id' => 6,
                'group_id' => 244,
                'created_at' => '2019-12-12 16:20:56',
                'updated_at' => '2019-12-12 16:20:56',
            ),
            200 => 
            array (
                'id' => 1424,
                'code' => 'EX-PB-011',
                'user_id' => 1451,
                'school_id' => 6,
                'group_id' => 244,
                'created_at' => '2019-12-12 16:21:16',
                'updated_at' => '2019-12-12 16:21:16',
            ),
            201 => 
            array (
                'id' => 1425,
                'code' => 'EX-PB-012',
                'user_id' => 1452,
                'school_id' => 6,
                'group_id' => 244,
                'created_at' => '2019-12-12 16:21:40',
                'updated_at' => '2019-12-12 16:21:40',
            ),
            202 => 
            array (
                'id' => 1426,
                'code' => 'EX-PB-013',
                'user_id' => 1453,
                'school_id' => 6,
                'group_id' => 244,
                'created_at' => '2019-12-12 16:22:08',
                'updated_at' => '2019-12-12 16:22:08',
            ),
            203 => 
            array (
                'id' => 1427,
                'code' => NULL,
                'user_id' => 842,
                'school_id' => 79,
                'group_id' => 245,
                'created_at' => '2019-12-16 11:20:44',
                'updated_at' => '2019-12-16 11:20:44',
            ),
            204 => 
            array (
                'id' => 1428,
                'code' => '148836',
                'user_id' => 1506,
                'school_id' => 13,
                'group_id' => 246,
                'created_at' => '2019-12-17 11:01:36',
                'updated_at' => '2019-12-17 11:01:36',
            ),
            205 => 
            array (
                'id' => 1429,
                'code' => '148836',
                'user_id' => 1507,
                'school_id' => 13,
                'group_id' => 246,
                'created_at' => '2019-12-17 11:01:36',
                'updated_at' => '2019-12-17 11:01:36',
            ),
            206 => 
            array (
                'id' => 1430,
                'code' => '148836',
                'user_id' => 1508,
                'school_id' => 13,
                'group_id' => 246,
                'created_at' => '2019-12-17 11:01:36',
                'updated_at' => '2019-12-17 11:01:36',
            ),
            207 => 
            array (
                'id' => 1431,
                'code' => '148836',
                'user_id' => 1509,
                'school_id' => 13,
                'group_id' => 246,
                'created_at' => '2019-12-17 11:01:36',
                'updated_at' => '2019-12-17 11:01:36',
            ),
            208 => 
            array (
                'id' => 1457,
                'code' => 'Martes',
                'user_id' => 1535,
                'school_id' => 7,
                'group_id' => 257,
                'created_at' => '2019-12-18 15:03:45',
                'updated_at' => '2019-12-18 15:03:45',
            ),
            209 => 
            array (
                'id' => 1458,
                'code' => 'Miercoles',
                'user_id' => 1536,
                'school_id' => 7,
                'group_id' => 258,
                'created_at' => '2019-12-18 15:04:03',
                'updated_at' => '2019-12-18 15:04:03',
            ),
            210 => 
            array (
                'id' => 1459,
                'code' => 'Lunes',
                'user_id' => 1537,
                'school_id' => 7,
                'group_id' => 259,
                'created_at' => '2019-12-18 15:04:19',
                'updated_at' => '2019-12-18 15:04:19',
            ),
            211 => 
            array (
                'id' => 1460,
                'code' => NULL,
                'user_id' => 1538,
                'school_id' => 7,
                'group_id' => 260,
                'created_at' => '2019-12-18 15:04:36',
                'updated_at' => '2019-12-18 15:04:36',
            ),
            212 => 
            array (
                'id' => 1461,
                'code' => 'Jueves',
                'user_id' => 1539,
                'school_id' => 7,
                'group_id' => 261,
                'created_at' => '2019-12-18 15:06:15',
                'updated_at' => '2019-12-18 15:06:15',
            ),
            213 => 
            array (
                'id' => 1462,
                'code' => 'Miercoles',
                'user_id' => 1540,
                'school_id' => 4,
                'group_id' => 262,
                'created_at' => '2019-12-18 15:39:29',
                'updated_at' => '2019-12-18 15:39:29',
            ),
            214 => 
            array (
                'id' => 1464,
                'code' => '148836',
                'user_id' => 1542,
                'school_id' => 83,
                'group_id' => 264,
                'created_at' => '2019-12-18 17:21:15',
                'updated_at' => '2019-12-18 17:21:15',
            ),
            215 => 
            array (
                'id' => 1491,
                'code' => 'EX.PB-017',
                'user_id' => 1569,
                'school_id' => 86,
                'group_id' => 269,
                'created_at' => '2019-12-18 17:37:25',
                'updated_at' => '2019-12-18 17:37:25',
            ),
            216 => 
            array (
                'id' => 1492,
                'code' => 'EX.PB-018',
                'user_id' => 1570,
                'school_id' => 86,
                'group_id' => 269,
                'created_at' => '2019-12-18 17:37:25',
                'updated_at' => '2019-12-18 17:37:25',
            ),
            217 => 
            array (
                'id' => 1493,
                'code' => 'EX.PB-019',
                'user_id' => 1571,
                'school_id' => 86,
                'group_id' => 269,
                'created_at' => '2019-12-18 17:37:25',
                'updated_at' => '2019-12-18 17:37:25',
            ),
            218 => 
            array (
                'id' => 1494,
                'code' => 'EX.PB-020',
                'user_id' => 1572,
                'school_id' => 86,
                'group_id' => 269,
                'created_at' => '2019-12-18 17:37:25',
                'updated_at' => '2019-12-18 17:37:25',
            ),
            219 => 
            array (
                'id' => 1495,
                'code' => 'EX.PB-021',
                'user_id' => 1573,
                'school_id' => 86,
                'group_id' => 269,
                'created_at' => '2019-12-18 17:37:25',
                'updated_at' => '2019-12-18 17:37:25',
            ),
            220 => 
            array (
                'id' => 1496,
                'code' => 'EX.PB-022',
                'user_id' => 1574,
                'school_id' => 86,
                'group_id' => 269,
                'created_at' => '2019-12-18 17:37:25',
                'updated_at' => '2019-12-18 17:37:25',
            ),
            221 => 
            array (
                'id' => 1497,
                'code' => 'EX.PB-023',
                'user_id' => 1575,
                'school_id' => 86,
                'group_id' => 269,
                'created_at' => '2019-12-18 17:37:26',
                'updated_at' => '2019-12-18 17:37:26',
            ),
            222 => 
            array (
                'id' => 1498,
                'code' => 'EX.PB-024',
                'user_id' => 1576,
                'school_id' => 86,
                'group_id' => 269,
                'created_at' => '2019-12-18 17:37:26',
                'updated_at' => '2019-12-18 17:37:26',
            ),
            223 => 
            array (
                'id' => 1499,
                'code' => 'EX.PB-001',
                'user_id' => 1577,
                'school_id' => 86,
                'group_id' => 270,
                'created_at' => '2019-12-18 17:38:30',
                'updated_at' => '2019-12-18 17:38:30',
            ),
            224 => 
            array (
                'id' => 1500,
                'code' => 'EX.KIN-017',
                'user_id' => 1578,
                'school_id' => 86,
                'group_id' => 304,
                'created_at' => '2019-12-18 17:38:30',
                'updated_at' => '2019-12-20 10:43:33',
            ),
            225 => 
            array (
                'id' => 1501,
                'code' => 'EX.PB-003',
                'user_id' => 1579,
                'school_id' => 86,
                'group_id' => 270,
                'created_at' => '2019-12-18 17:38:30',
                'updated_at' => '2019-12-18 17:38:30',
            ),
            226 => 
            array (
                'id' => 1502,
                'code' => 'EX.PB-004',
                'user_id' => 1580,
                'school_id' => 86,
                'group_id' => 270,
                'created_at' => '2019-12-18 17:38:30',
                'updated_at' => '2019-12-18 17:38:30',
            ),
            227 => 
            array (
                'id' => 1503,
                'code' => 'EX.PB-005',
                'user_id' => 1581,
                'school_id' => 86,
                'group_id' => 270,
                'created_at' => '2019-12-18 17:38:31',
                'updated_at' => '2019-12-18 17:38:31',
            ),
            228 => 
            array (
                'id' => 1504,
                'code' => 'EX.PB-006',
                'user_id' => 1582,
                'school_id' => 86,
                'group_id' => 270,
                'created_at' => '2019-12-18 17:38:31',
                'updated_at' => '2019-12-18 17:38:31',
            ),
            229 => 
            array (
                'id' => 1505,
                'code' => 'EX.PB-007',
                'user_id' => 1583,
                'school_id' => 86,
                'group_id' => 270,
                'created_at' => '2019-12-18 17:38:31',
                'updated_at' => '2019-12-18 17:38:31',
            ),
            230 => 
            array (
                'id' => 1506,
                'code' => 'EX.PRI-007',
                'user_id' => 1584,
                'school_id' => 86,
                'group_id' => 306,
                'created_at' => '2019-12-18 17:38:31',
                'updated_at' => '2019-12-20 10:46:20',
            ),
            231 => 
            array (
                'id' => 1507,
                'code' => 'EX.PB-009',
                'user_id' => 1585,
                'school_id' => 86,
                'group_id' => 270,
                'created_at' => '2019-12-18 17:38:31',
                'updated_at' => '2019-12-18 17:38:31',
            ),
            232 => 
            array (
                'id' => 1508,
                'code' => 'EX.PB-010',
                'user_id' => 1586,
                'school_id' => 86,
                'group_id' => 270,
                'created_at' => '2019-12-18 17:38:31',
                'updated_at' => '2019-12-18 17:38:31',
            ),
            233 => 
            array (
                'id' => 1509,
                'code' => 'EX.PB-011',
                'user_id' => 1587,
                'school_id' => 86,
                'group_id' => 270,
                'created_at' => '2019-12-18 17:38:31',
                'updated_at' => '2019-12-18 17:38:31',
            ),
            234 => 
            array (
                'id' => 1510,
                'code' => 'EX.PB-012',
                'user_id' => 1588,
                'school_id' => 86,
                'group_id' => 270,
                'created_at' => '2019-12-18 17:38:31',
                'updated_at' => '2019-12-18 17:38:31',
            ),
            235 => 
            array (
                'id' => 1511,
                'code' => 'EX.PB-013',
                'user_id' => 1589,
                'school_id' => 86,
                'group_id' => 270,
                'created_at' => '2019-12-18 17:38:31',
                'updated_at' => '2019-12-18 17:38:31',
            ),
            236 => 
            array (
                'id' => 1512,
                'code' => 'EX.DUP-001',
                'user_id' => 1590,
                'school_id' => 86,
                'group_id' => 271,
                'created_at' => '2019-12-18 17:39:15',
                'updated_at' => '2019-12-18 17:39:15',
            ),
            237 => 
            array (
                'id' => 1513,
                'code' => 'EX.DUP-002',
                'user_id' => 1591,
                'school_id' => 86,
                'group_id' => 271,
                'created_at' => '2019-12-18 17:39:15',
                'updated_at' => '2019-12-18 17:39:15',
            ),
            238 => 
            array (
                'id' => 1514,
                'code' => 'EX.DUP-003',
                'user_id' => 1592,
                'school_id' => 86,
                'group_id' => 271,
                'created_at' => '2019-12-18 17:39:15',
                'updated_at' => '2019-12-18 17:39:15',
            ),
            239 => 
            array (
                'id' => 1515,
                'code' => 'EX.DUP-004',
                'user_id' => 1593,
                'school_id' => 86,
                'group_id' => 271,
                'created_at' => '2019-12-18 17:39:16',
                'updated_at' => '2019-12-18 17:39:16',
            ),
            240 => 
            array (
                'id' => 1516,
                'code' => 'EX.DUP-005',
                'user_id' => 1594,
                'school_id' => 86,
                'group_id' => 271,
                'created_at' => '2019-12-18 17:39:16',
                'updated_at' => '2019-12-18 17:39:16',
            ),
            241 => 
            array (
                'id' => 1517,
                'code' => 'EX.DUP-006',
                'user_id' => 1595,
                'school_id' => 86,
                'group_id' => 271,
                'created_at' => '2019-12-18 17:39:16',
                'updated_at' => '2019-12-18 17:39:16',
            ),
            242 => 
            array (
                'id' => 1518,
                'code' => 'EX.DUP-007',
                'user_id' => 1596,
                'school_id' => 86,
                'group_id' => 271,
                'created_at' => '2019-12-18 17:39:16',
                'updated_at' => '2019-12-18 17:39:16',
            ),
            243 => 
            array (
                'id' => 1519,
                'code' => 'EX.DUP-008',
                'user_id' => 1597,
                'school_id' => 86,
                'group_id' => 271,
                'created_at' => '2019-12-18 17:39:16',
                'updated_at' => '2019-12-18 17:39:16',
            ),
            244 => 
            array (
                'id' => 1520,
                'code' => 'EX.DUP-009',
                'user_id' => 1598,
                'school_id' => 86,
                'group_id' => 271,
                'created_at' => '2019-12-18 17:39:16',
                'updated_at' => '2019-12-18 17:39:16',
            ),
            245 => 
            array (
                'id' => 1521,
                'code' => 'EX.DUP-010',
                'user_id' => 1599,
                'school_id' => 86,
                'group_id' => 271,
                'created_at' => '2019-12-18 17:39:16',
                'updated_at' => '2019-12-18 17:39:16',
            ),
            246 => 
            array (
                'id' => 1522,
                'code' => 'EX.PB-014',
                'user_id' => 1600,
                'school_id' => 86,
                'group_id' => 288,
                'created_at' => '2019-12-18 17:40:31',
                'updated_at' => '2019-12-19 16:19:55',
            ),
            247 => 
            array (
                'id' => 1523,
                'code' => 'EX.PB-015',
                'user_id' => 1601,
                'school_id' => 86,
                'group_id' => 288,
                'created_at' => '2019-12-18 17:40:31',
                'updated_at' => '2019-12-19 16:19:55',
            ),
            248 => 
            array (
                'id' => 1524,
                'code' => 'EX.PB-016',
                'user_id' => 1602,
                'school_id' => 86,
                'group_id' => 288,
                'created_at' => '2019-12-18 17:40:31',
                'updated_at' => '2019-12-19 16:19:55',
            ),
            249 => 
            array (
                'id' => 1525,
                'code' => 'EX.DUP-011',
                'user_id' => 1603,
                'school_id' => 86,
                'group_id' => 272,
                'created_at' => '2019-12-18 17:41:35',
                'updated_at' => '2019-12-18 17:41:35',
            ),
            250 => 
            array (
                'id' => 1526,
                'code' => 'EX.DUP-012',
                'user_id' => 1604,
                'school_id' => 86,
                'group_id' => 272,
                'created_at' => '2019-12-18 17:41:35',
                'updated_at' => '2019-12-18 17:41:35',
            ),
            251 => 
            array (
                'id' => 1527,
                'code' => 'EX.DUP-013',
                'user_id' => 1605,
                'school_id' => 86,
                'group_id' => 272,
                'created_at' => '2019-12-18 17:41:35',
                'updated_at' => '2019-12-18 17:41:35',
            ),
            252 => 
            array (
                'id' => 1528,
                'code' => 'EX.DUP-014',
                'user_id' => 1606,
                'school_id' => 86,
                'group_id' => 272,
                'created_at' => '2019-12-18 17:41:36',
                'updated_at' => '2019-12-18 17:41:36',
            ),
            253 => 
            array (
                'id' => 1529,
                'code' => 'EX.KIN-013',
                'user_id' => 1607,
                'school_id' => 86,
                'group_id' => 303,
                'created_at' => '2019-12-18 17:41:36',
                'updated_at' => '2019-12-20 10:42:12',
            ),
            254 => 
            array (
                'id' => 1530,
                'code' => 'EX.DUP-016',
                'user_id' => 1608,
                'school_id' => 86,
                'group_id' => 272,
                'created_at' => '2019-12-18 17:41:36',
                'updated_at' => '2019-12-18 17:41:36',
            ),
            255 => 
            array (
                'id' => 1531,
                'code' => 'EX.DUP-017',
                'user_id' => 1609,
                'school_id' => 86,
                'group_id' => 272,
                'created_at' => '2019-12-18 17:41:36',
                'updated_at' => '2019-12-18 17:41:36',
            ),
            256 => 
            array (
                'id' => 1532,
                'code' => 'EX.DUP-018',
                'user_id' => 1610,
                'school_id' => 86,
                'group_id' => 272,
                'created_at' => '2019-12-18 17:41:36',
                'updated_at' => '2019-12-18 17:41:36',
            ),
            257 => 
            array (
                'id' => 1533,
                'code' => 'EX.DUP-019',
                'user_id' => 1611,
                'school_id' => 86,
                'group_id' => 272,
                'created_at' => '2019-12-18 17:41:36',
                'updated_at' => '2019-12-18 17:41:36',
            ),
            258 => 
            array (
                'id' => 1534,
                'code' => 'EX.DUP-020',
                'user_id' => 1612,
                'school_id' => 86,
                'group_id' => 272,
                'created_at' => '2019-12-18 17:41:36',
                'updated_at' => '2019-12-18 17:41:36',
            ),
            259 => 
            array (
                'id' => 1535,
                'code' => 'EX.DUP-021',
                'user_id' => 1613,
                'school_id' => 86,
                'group_id' => 272,
                'created_at' => '2019-12-18 17:41:36',
                'updated_at' => '2019-12-18 17:41:36',
            ),
            260 => 
            array (
                'id' => 1536,
                'code' => 'EX.DUP-022',
                'user_id' => 1614,
                'school_id' => 86,
                'group_id' => 272,
                'created_at' => '2019-12-18 17:41:36',
                'updated_at' => '2019-12-18 17:41:36',
            ),
            261 => 
            array (
                'id' => 1537,
                'code' => 'EX.DUP-023',
                'user_id' => 1615,
                'school_id' => 86,
                'group_id' => 272,
                'created_at' => '2019-12-18 17:41:37',
                'updated_at' => '2019-12-18 17:41:37',
            ),
            262 => 
            array (
                'id' => 1538,
                'code' => 'EX.DUP-024',
                'user_id' => 1616,
                'school_id' => 86,
                'group_id' => 273,
                'created_at' => '2019-12-18 17:42:15',
                'updated_at' => '2019-12-18 17:42:15',
            ),
            263 => 
            array (
                'id' => 1539,
                'code' => 'EX.DUP-025',
                'user_id' => 1617,
                'school_id' => 86,
                'group_id' => 273,
                'created_at' => '2019-12-18 17:42:15',
                'updated_at' => '2019-12-18 17:42:15',
            ),
            264 => 
            array (
                'id' => 1540,
                'code' => 'EX.DUP-026',
                'user_id' => 1618,
                'school_id' => 86,
                'group_id' => 273,
                'created_at' => '2019-12-18 17:42:15',
                'updated_at' => '2019-12-18 17:42:15',
            ),
            265 => 
            array (
                'id' => 1541,
                'code' => 'EX.DUP-027',
                'user_id' => 1619,
                'school_id' => 86,
                'group_id' => 273,
                'created_at' => '2019-12-18 17:42:15',
                'updated_at' => '2019-12-18 17:42:15',
            ),
            266 => 
            array (
                'id' => 1542,
                'code' => 'EX.DUP-028',
                'user_id' => 1620,
                'school_id' => 86,
                'group_id' => 273,
                'created_at' => '2019-12-18 17:42:15',
                'updated_at' => '2019-12-18 17:42:15',
            ),
            267 => 
            array (
                'id' => 1543,
                'code' => 'EX.DUP-029',
                'user_id' => 1621,
                'school_id' => 86,
                'group_id' => 273,
                'created_at' => '2019-12-18 17:42:15',
                'updated_at' => '2019-12-18 17:42:15',
            ),
            268 => 
            array (
                'id' => 1544,
                'code' => 'EX.PA.M-001',
                'user_id' => 1622,
                'school_id' => 9,
                'group_id' => 176,
                'created_at' => '2019-12-18 21:12:33',
                'updated_at' => '2019-12-18 21:12:33',
            ),
            269 => 
            array (
                'id' => 1545,
                'code' => 'EX.PA.M-002',
                'user_id' => 1623,
                'school_id' => 9,
                'group_id' => 176,
                'created_at' => '2019-12-18 21:12:33',
                'updated_at' => '2019-12-18 21:12:33',
            ),
            270 => 
            array (
                'id' => 1546,
                'code' => 'EX.PA.M-003',
                'user_id' => 1624,
                'school_id' => 9,
                'group_id' => 176,
                'created_at' => '2019-12-18 21:12:33',
                'updated_at' => '2019-12-18 21:12:33',
            ),
            271 => 
            array (
                'id' => 1547,
                'code' => 'EX.PA.M-004',
                'user_id' => 1625,
                'school_id' => 9,
                'group_id' => 176,
                'created_at' => '2019-12-18 21:12:33',
                'updated_at' => '2019-12-18 21:12:33',
            ),
            272 => 
            array (
                'id' => 1548,
                'code' => 'EX.PA.M-005',
                'user_id' => 1626,
                'school_id' => 9,
                'group_id' => 176,
                'created_at' => '2019-12-18 21:12:33',
                'updated_at' => '2019-12-18 21:12:33',
            ),
            273 => 
            array (
                'id' => 1549,
                'code' => 'EX.PA.M-006',
                'user_id' => 1627,
                'school_id' => 9,
                'group_id' => 176,
                'created_at' => '2019-12-18 21:12:33',
                'updated_at' => '2019-12-18 21:12:33',
            ),
            274 => 
            array (
                'id' => 1550,
                'code' => 'EX.PA.M-007',
                'user_id' => 1628,
                'school_id' => 9,
                'group_id' => 176,
                'created_at' => '2019-12-18 21:12:34',
                'updated_at' => '2019-12-18 21:12:34',
            ),
            275 => 
            array (
                'id' => 1551,
                'code' => 'EX.PA.M-008',
                'user_id' => 1629,
                'school_id' => 9,
                'group_id' => 176,
                'created_at' => '2019-12-18 21:12:34',
                'updated_at' => '2019-12-18 21:12:34',
            ),
            276 => 
            array (
                'id' => 1552,
                'code' => 'EX.PA.M-009',
                'user_id' => 1630,
                'school_id' => 9,
                'group_id' => 176,
                'created_at' => '2019-12-18 21:12:34',
                'updated_at' => '2019-12-18 21:12:34',
            ),
            277 => 
            array (
                'id' => 1553,
                'code' => 'EX.PA.M-010',
                'user_id' => 1631,
                'school_id' => 9,
                'group_id' => 176,
                'created_at' => '2019-12-18 21:12:34',
                'updated_at' => '2019-12-18 21:12:34',
            ),
            278 => 
            array (
                'id' => 1554,
                'code' => 'EX.PA.M-011',
                'user_id' => 1632,
                'school_id' => 9,
                'group_id' => 176,
                'created_at' => '2019-12-18 21:12:34',
                'updated_at' => '2019-12-18 21:12:34',
            ),
            279 => 
            array (
                'id' => 1587,
                'code' => 'EX.PB.M-001',
                'user_id' => 1665,
                'school_id' => 88,
                'group_id' => 281,
                'created_at' => '2019-12-18 21:25:40',
                'updated_at' => '2019-12-18 21:25:40',
            ),
            280 => 
            array (
                'id' => 1588,
                'code' => 'EX.PB.M-002',
                'user_id' => 1666,
                'school_id' => 88,
                'group_id' => 281,
                'created_at' => '2019-12-18 21:25:40',
                'updated_at' => '2019-12-18 21:25:40',
            ),
            281 => 
            array (
                'id' => 1589,
                'code' => 'EX.PB.M-003',
                'user_id' => 1667,
                'school_id' => 88,
                'group_id' => 281,
                'created_at' => '2019-12-18 21:25:40',
                'updated_at' => '2019-12-18 21:25:40',
            ),
            282 => 
            array (
                'id' => 1590,
                'code' => 'EX.PB.M-004',
                'user_id' => 1668,
                'school_id' => 88,
                'group_id' => 281,
                'created_at' => '2019-12-18 21:25:40',
                'updated_at' => '2019-12-18 21:25:40',
            ),
            283 => 
            array (
                'id' => 1591,
                'code' => 'EX.PB.M-005',
                'user_id' => 1669,
                'school_id' => 88,
                'group_id' => 281,
                'created_at' => '2019-12-18 21:25:40',
                'updated_at' => '2019-12-18 21:25:40',
            ),
            284 => 
            array (
                'id' => 1592,
                'code' => 'EX.PB.M-006',
                'user_id' => 1670,
                'school_id' => 88,
                'group_id' => 281,
                'created_at' => '2019-12-18 21:25:40',
                'updated_at' => '2019-12-18 21:25:40',
            ),
            285 => 
            array (
                'id' => 1593,
                'code' => 'EX.PB.M-007',
                'user_id' => 1671,
                'school_id' => 88,
                'group_id' => 281,
                'created_at' => '2019-12-18 21:25:40',
                'updated_at' => '2019-12-18 21:25:40',
            ),
            286 => 
            array (
                'id' => 1652,
                'code' => 'Viernes',
                'user_id' => 1730,
                'school_id' => 4,
                'group_id' => 293,
                'created_at' => '2019-12-19 11:07:46',
                'updated_at' => '2019-12-19 11:07:46',
            ),
            287 => 
            array (
                'id' => 1653,
                'code' => 'Viernes',
                'user_id' => 1731,
                'school_id' => 4,
                'group_id' => 295,
                'created_at' => '2019-12-19 11:17:32',
                'updated_at' => '2019-12-19 11:17:32',
            ),
            288 => 
            array (
                'id' => 1654,
                'code' => 'Sabado',
                'user_id' => 1732,
                'school_id' => 77,
                'group_id' => 296,
                'created_at' => '2019-12-19 11:34:16',
                'updated_at' => '2019-12-19 11:34:16',
            ),
            289 => 
            array (
                'id' => 1655,
                'code' => 'Sabado',
                'user_id' => 1733,
                'school_id' => 77,
                'group_id' => 296,
                'created_at' => '2019-12-19 11:34:17',
                'updated_at' => '2019-12-19 11:34:17',
            ),
            290 => 
            array (
                'id' => 1656,
                'code' => 'Sabado',
                'user_id' => 1734,
                'school_id' => 77,
                'group_id' => 296,
                'created_at' => '2019-12-19 11:34:17',
                'updated_at' => '2019-12-19 11:34:17',
            ),
            291 => 
            array (
                'id' => 1657,
                'code' => 'Viernes',
                'user_id' => 1735,
                'school_id' => 4,
                'group_id' => 295,
                'created_at' => '2019-12-19 11:46:31',
                'updated_at' => '2019-12-19 11:46:31',
            ),
            292 => 
            array (
                'id' => 1658,
                'code' => 'Viernes',
                'user_id' => 1736,
                'school_id' => 4,
                'group_id' => 295,
                'created_at' => '2019-12-19 11:46:31',
                'updated_at' => '2019-12-19 11:46:31',
            ),
            293 => 
            array (
                'id' => 1659,
                'code' => 'Viernes',
                'user_id' => 1737,
                'school_id' => 4,
                'group_id' => 295,
                'created_at' => '2019-12-19 11:46:31',
                'updated_at' => '2019-12-19 11:46:31',
            ),
            294 => 
            array (
                'id' => 1660,
                'code' => 'Viernes',
                'user_id' => 1738,
                'school_id' => 4,
                'group_id' => 295,
                'created_at' => '2019-12-19 11:46:31',
                'updated_at' => '2019-12-19 11:46:31',
            ),
            295 => 
            array (
                'id' => 1661,
                'code' => 'Viernes',
                'user_id' => 1739,
                'school_id' => 4,
                'group_id' => 293,
                'created_at' => '2019-12-19 11:59:08',
                'updated_at' => '2019-12-19 11:59:08',
            ),
            296 => 
            array (
                'id' => 1662,
                'code' => 'Viernes',
                'user_id' => 1740,
                'school_id' => 4,
                'group_id' => 293,
                'created_at' => '2019-12-19 11:59:09',
                'updated_at' => '2019-12-19 11:59:09',
            ),
            297 => 
            array (
                'id' => 1663,
                'code' => 'Viernes',
                'user_id' => 1741,
                'school_id' => 4,
                'group_id' => 293,
                'created_at' => '2019-12-19 11:59:09',
                'updated_at' => '2019-12-19 11:59:09',
            ),
            298 => 
            array (
                'id' => 1664,
                'code' => 'Viernes',
                'user_id' => 1742,
                'school_id' => 4,
                'group_id' => 293,
                'created_at' => '2019-12-19 11:59:09',
                'updated_at' => '2019-12-19 11:59:09',
            ),
            299 => 
            array (
                'id' => 1665,
                'code' => 'Viernes',
                'user_id' => 1743,
                'school_id' => 4,
                'group_id' => 293,
                'created_at' => '2019-12-19 11:59:09',
                'updated_at' => '2019-12-19 11:59:09',
            ),
            300 => 
            array (
                'id' => 1666,
                'code' => 'Viernes',
                'user_id' => 1744,
                'school_id' => 4,
                'group_id' => 293,
                'created_at' => '2019-12-19 11:59:09',
                'updated_at' => '2019-12-19 11:59:09',
            ),
            301 => 
            array (
                'id' => 1667,
                'code' => 'Viernes',
                'user_id' => 1745,
                'school_id' => 4,
                'group_id' => 293,
                'created_at' => '2019-12-19 11:59:09',
                'updated_at' => '2019-12-19 11:59:09',
            ),
            302 => 
            array (
                'id' => 1668,
                'code' => 'Viernes',
                'user_id' => 1746,
                'school_id' => 4,
                'group_id' => 293,
                'created_at' => '2019-12-19 11:59:09',
                'updated_at' => '2019-12-19 11:59:09',
            ),
            303 => 
            array (
                'id' => 1669,
                'code' => 'Viernes',
                'user_id' => 1747,
                'school_id' => 4,
                'group_id' => 293,
                'created_at' => '2019-12-19 11:59:09',
                'updated_at' => '2019-12-19 11:59:09',
            ),
            304 => 
            array (
                'id' => 1670,
                'code' => 'Viernes',
                'user_id' => 1748,
                'school_id' => 4,
                'group_id' => 293,
                'created_at' => '2019-12-19 11:59:09',
                'updated_at' => '2019-12-19 11:59:09',
            ),
            305 => 
            array (
                'id' => 1671,
                'code' => 'Viernes',
                'user_id' => 1749,
                'school_id' => 4,
                'group_id' => 293,
                'created_at' => '2019-12-19 11:59:10',
                'updated_at' => '2019-12-19 11:59:10',
            ),
            306 => 
            array (
                'id' => 1672,
                'code' => 'Viernes',
                'user_id' => 1750,
                'school_id' => 4,
                'group_id' => 293,
                'created_at' => '2019-12-19 11:59:10',
                'updated_at' => '2019-12-19 11:59:10',
            ),
            307 => 
            array (
                'id' => 1673,
                'code' => 'Viernes',
                'user_id' => 1751,
                'school_id' => 4,
                'group_id' => 293,
                'created_at' => '2019-12-19 11:59:10',
                'updated_at' => '2019-12-19 11:59:10',
            ),
            308 => 
            array (
                'id' => 1674,
                'code' => 'Viernes',
                'user_id' => 1752,
                'school_id' => 4,
                'group_id' => 293,
                'created_at' => '2019-12-19 11:59:10',
                'updated_at' => '2019-12-19 11:59:10',
            ),
            309 => 
            array (
                'id' => 1675,
                'code' => 'Viernes',
                'user_id' => 1753,
                'school_id' => 4,
                'group_id' => 293,
                'created_at' => '2019-12-19 11:59:10',
                'updated_at' => '2019-12-19 11:59:10',
            ),
            310 => 
            array (
                'id' => 1676,
                'code' => 'Viernes',
                'user_id' => 1754,
                'school_id' => 4,
                'group_id' => 293,
                'created_at' => '2019-12-19 11:59:10',
                'updated_at' => '2019-12-19 11:59:10',
            ),
            311 => 
            array (
                'id' => 1677,
                'code' => 'Viernes',
                'user_id' => 1755,
                'school_id' => 4,
                'group_id' => 293,
                'created_at' => '2019-12-19 11:59:10',
                'updated_at' => '2019-12-19 11:59:10',
            ),
            312 => 
            array (
                'id' => 1678,
                'code' => 'Viernes',
                'user_id' => 1756,
                'school_id' => 4,
                'group_id' => 293,
                'created_at' => '2019-12-19 11:59:10',
                'updated_at' => '2019-12-19 11:59:10',
            ),
            313 => 
            array (
                'id' => 1679,
                'code' => 'Viernes',
                'user_id' => 1757,
                'school_id' => 4,
                'group_id' => 293,
                'created_at' => '2019-12-19 11:59:10',
                'updated_at' => '2019-12-19 11:59:10',
            ),
            314 => 
            array (
                'id' => 1680,
                'code' => 'Viernes',
                'user_id' => 1758,
                'school_id' => 4,
                'group_id' => 293,
                'created_at' => '2019-12-19 11:59:11',
                'updated_at' => '2019-12-19 11:59:11',
            ),
            315 => 
            array (
                'id' => 1681,
                'code' => 'Viernes',
                'user_id' => 1759,
                'school_id' => 4,
                'group_id' => 293,
                'created_at' => '2019-12-19 11:59:11',
                'updated_at' => '2019-12-19 11:59:11',
            ),
            316 => 
            array (
                'id' => 1682,
                'code' => 'Miercoles',
                'user_id' => 1760,
                'school_id' => 4,
                'group_id' => 262,
                'created_at' => '2019-12-19 12:05:42',
                'updated_at' => '2019-12-19 12:05:42',
            ),
            317 => 
            array (
                'id' => 1683,
                'code' => 'Miercoles',
                'user_id' => 1761,
                'school_id' => 4,
                'group_id' => 262,
                'created_at' => '2019-12-19 12:05:42',
                'updated_at' => '2019-12-19 12:05:42',
            ),
            318 => 
            array (
                'id' => 1684,
                'code' => 'Miercoles',
                'user_id' => 1762,
                'school_id' => 4,
                'group_id' => 262,
                'created_at' => '2019-12-19 12:05:42',
                'updated_at' => '2019-12-19 12:05:42',
            ),
            319 => 
            array (
                'id' => 1685,
                'code' => 'Miercoles',
                'user_id' => 1763,
                'school_id' => 4,
                'group_id' => 262,
                'created_at' => '2019-12-19 12:05:42',
                'updated_at' => '2019-12-19 12:05:42',
            ),
            320 => 
            array (
                'id' => 1686,
                'code' => 'Miercoles',
                'user_id' => 1764,
                'school_id' => 4,
                'group_id' => 262,
                'created_at' => '2019-12-19 12:05:42',
                'updated_at' => '2019-12-19 12:05:42',
            ),
            321 => 
            array (
                'id' => 1687,
                'code' => 'Miercoles',
                'user_id' => 1765,
                'school_id' => 4,
                'group_id' => 262,
                'created_at' => '2019-12-19 12:05:42',
                'updated_at' => '2019-12-19 12:05:42',
            ),
            322 => 
            array (
                'id' => 1688,
                'code' => 'Miercoles',
                'user_id' => 1766,
                'school_id' => 4,
                'group_id' => 262,
                'created_at' => '2019-12-19 12:05:42',
                'updated_at' => '2019-12-19 12:05:42',
            ),
            323 => 
            array (
                'id' => 1689,
                'code' => 'Miercoles',
                'user_id' => 1767,
                'school_id' => 4,
                'group_id' => 262,
                'created_at' => '2019-12-19 12:05:43',
                'updated_at' => '2019-12-19 12:05:43',
            ),
            324 => 
            array (
                'id' => 1690,
                'code' => 'Miercoles',
                'user_id' => 1768,
                'school_id' => 4,
                'group_id' => 262,
                'created_at' => '2019-12-19 12:05:43',
                'updated_at' => '2019-12-19 12:05:43',
            ),
            325 => 
            array (
                'id' => 1691,
                'code' => 'Miercoles',
                'user_id' => 1769,
                'school_id' => 4,
                'group_id' => 262,
                'created_at' => '2019-12-19 12:05:43',
                'updated_at' => '2019-12-19 12:05:43',
            ),
            326 => 
            array (
                'id' => 1692,
                'code' => 'Miercoles',
                'user_id' => 1770,
                'school_id' => 4,
                'group_id' => 262,
                'created_at' => '2019-12-19 12:05:43',
                'updated_at' => '2019-12-19 12:05:43',
            ),
            327 => 
            array (
                'id' => 1693,
                'code' => 'Miercoles',
                'user_id' => 1771,
                'school_id' => 4,
                'group_id' => 262,
                'created_at' => '2019-12-19 12:05:43',
                'updated_at' => '2019-12-19 12:05:43',
            ),
            328 => 
            array (
                'id' => 1694,
                'code' => 'Miercoles',
                'user_id' => 1772,
                'school_id' => 4,
                'group_id' => 262,
                'created_at' => '2019-12-19 12:05:43',
                'updated_at' => '2019-12-19 12:05:43',
            ),
            329 => 
            array (
                'id' => 1695,
                'code' => 'Miercoles',
                'user_id' => 1773,
                'school_id' => 4,
                'group_id' => 262,
                'created_at' => '2019-12-19 12:05:43',
                'updated_at' => '2019-12-19 12:05:43',
            ),
            330 => 
            array (
                'id' => 1696,
                'code' => 'Miercoles',
                'user_id' => 1774,
                'school_id' => 4,
                'group_id' => 262,
                'created_at' => '2019-12-19 12:05:43',
                'updated_at' => '2019-12-19 12:05:43',
            ),
            331 => 
            array (
                'id' => 1697,
                'code' => 'Miercoles',
                'user_id' => 1775,
                'school_id' => 4,
                'group_id' => 262,
                'created_at' => '2019-12-19 12:05:43',
                'updated_at' => '2019-12-19 12:05:43',
            ),
            332 => 
            array (
                'id' => 1698,
                'code' => 'Miercoles',
                'user_id' => 1776,
                'school_id' => 4,
                'group_id' => 262,
                'created_at' => '2019-12-19 12:05:43',
                'updated_at' => '2019-12-19 12:05:43',
            ),
            333 => 
            array (
                'id' => 1699,
                'code' => 'Miercoles',
                'user_id' => 1777,
                'school_id' => 4,
                'group_id' => 262,
                'created_at' => '2019-12-19 12:05:44',
                'updated_at' => '2019-12-19 12:05:44',
            ),
            334 => 
            array (
                'id' => 1700,
                'code' => 'Miercoles',
                'user_id' => 1778,
                'school_id' => 4,
                'group_id' => 262,
                'created_at' => '2019-12-19 12:05:44',
                'updated_at' => '2019-12-19 12:05:44',
            ),
            335 => 
            array (
                'id' => 1701,
                'code' => 'Miercoles',
                'user_id' => 1779,
                'school_id' => 4,
                'group_id' => 262,
                'created_at' => '2019-12-19 12:05:44',
                'updated_at' => '2019-12-19 12:05:44',
            ),
            336 => 
            array (
                'id' => 1705,
                'code' => 'Jueves',
                'user_id' => 1783,
                'school_id' => 76,
                'group_id' => 298,
                'created_at' => '2019-12-19 12:30:36',
                'updated_at' => '2019-12-19 12:30:36',
            ),
            337 => 
            array (
                'id' => 1706,
                'code' => 'Jueves',
                'user_id' => 1784,
                'school_id' => 76,
                'group_id' => 298,
                'created_at' => '2019-12-19 12:30:36',
                'updated_at' => '2019-12-19 12:30:36',
            ),
            338 => 
            array (
                'id' => 1708,
                'code' => 'Jueves',
                'user_id' => 1786,
                'school_id' => 76,
                'group_id' => 298,
                'created_at' => '2019-12-19 12:30:36',
                'updated_at' => '2019-12-19 12:30:36',
            ),
            339 => 
            array (
                'id' => 1709,
                'code' => 'Jueves',
                'user_id' => 1787,
                'school_id' => 76,
                'group_id' => 298,
                'created_at' => '2019-12-19 12:33:13',
                'updated_at' => '2019-12-19 12:33:13',
            ),
            340 => 
            array (
                'id' => 1710,
                'code' => 'Miercoles',
                'user_id' => 1788,
                'school_id' => 7,
                'group_id' => 258,
                'created_at' => '2019-12-19 13:48:48',
                'updated_at' => '2019-12-19 13:48:48',
            ),
            341 => 
            array (
                'id' => 1711,
                'code' => 'Miercoles',
                'user_id' => 1789,
                'school_id' => 7,
                'group_id' => 258,
                'created_at' => '2019-12-19 13:48:48',
                'updated_at' => '2019-12-19 13:48:48',
            ),
            342 => 
            array (
                'id' => 1712,
                'code' => 'Miercoles',
                'user_id' => 1790,
                'school_id' => 7,
                'group_id' => 258,
                'created_at' => '2019-12-19 13:48:48',
                'updated_at' => '2019-12-19 13:48:48',
            ),
            343 => 
            array (
                'id' => 1713,
                'code' => 'Miercoles',
                'user_id' => 1791,
                'school_id' => 7,
                'group_id' => 258,
                'created_at' => '2019-12-19 13:48:48',
                'updated_at' => '2019-12-19 13:48:48',
            ),
            344 => 
            array (
                'id' => 1714,
                'code' => 'Jueves',
                'user_id' => 1792,
                'school_id' => 7,
                'group_id' => 261,
                'created_at' => '2019-12-19 13:54:36',
                'updated_at' => '2019-12-19 13:54:36',
            ),
            345 => 
            array (
                'id' => 1715,
                'code' => 'Jueves',
                'user_id' => 1793,
                'school_id' => 7,
                'group_id' => 261,
                'created_at' => '2019-12-19 13:54:36',
                'updated_at' => '2019-12-19 13:54:36',
            ),
            346 => 
            array (
                'id' => 1716,
                'code' => 'Jueves',
                'user_id' => 1794,
                'school_id' => 7,
                'group_id' => 261,
                'created_at' => '2019-12-19 13:54:36',
                'updated_at' => '2019-12-19 13:54:36',
            ),
            347 => 
            array (
                'id' => 1717,
                'code' => 'Jueves',
                'user_id' => 1795,
                'school_id' => 7,
                'group_id' => 261,
                'created_at' => '2019-12-19 13:54:36',
                'updated_at' => '2019-12-19 13:54:36',
            ),
            348 => 
            array (
                'id' => 1718,
                'code' => 'Jueves',
                'user_id' => 1796,
                'school_id' => 7,
                'group_id' => 261,
                'created_at' => '2019-12-19 13:54:36',
                'updated_at' => '2019-12-19 13:54:36',
            ),
            349 => 
            array (
                'id' => 1719,
                'code' => NULL,
                'user_id' => 1797,
                'school_id' => 7,
                'group_id' => 260,
                'created_at' => '2019-12-19 14:01:18',
                'updated_at' => '2019-12-19 14:01:18',
            ),
            350 => 
            array (
                'id' => 1720,
                'code' => NULL,
                'user_id' => 1798,
                'school_id' => 7,
                'group_id' => 260,
                'created_at' => '2019-12-19 14:01:18',
                'updated_at' => '2019-12-19 14:01:18',
            ),
            351 => 
            array (
                'id' => 1731,
                'code' => 'EX.PB.F-001',
                'user_id' => 1809,
                'school_id' => 5,
                'group_id' => 287,
                'created_at' => '2019-12-19 16:06:51',
                'updated_at' => '2019-12-19 16:06:51',
            ),
            352 => 
            array (
                'id' => 1732,
                'code' => 'EX.PB.F-002',
                'user_id' => 1810,
                'school_id' => 5,
                'group_id' => 287,
                'created_at' => '2019-12-19 16:06:51',
                'updated_at' => '2019-12-19 16:06:51',
            ),
            353 => 
            array (
                'id' => 1733,
                'code' => 'EX.PB.F-003',
                'user_id' => 1811,
                'school_id' => 5,
                'group_id' => 287,
                'created_at' => '2019-12-19 16:06:52',
                'updated_at' => '2019-12-19 16:06:52',
            ),
            354 => 
            array (
                'id' => 1734,
                'code' => 'EX.PB.F-004',
                'user_id' => 1812,
                'school_id' => 5,
                'group_id' => 287,
                'created_at' => '2019-12-19 16:06:52',
                'updated_at' => '2019-12-19 16:06:52',
            ),
            355 => 
            array (
                'id' => 1735,
                'code' => 'EX.PB.F-005',
                'user_id' => 1813,
                'school_id' => 5,
                'group_id' => 287,
                'created_at' => '2019-12-19 16:06:52',
                'updated_at' => '2019-12-19 16:06:52',
            ),
            356 => 
            array (
                'id' => 1736,
                'code' => 'EX.PB.F-006',
                'user_id' => 1814,
                'school_id' => 5,
                'group_id' => 287,
                'created_at' => '2019-12-19 16:06:52',
                'updated_at' => '2019-12-19 16:06:52',
            ),
            357 => 
            array (
                'id' => 1737,
                'code' => 'EX.PB.F-007',
                'user_id' => 1815,
                'school_id' => 5,
                'group_id' => 287,
                'created_at' => '2019-12-19 16:06:52',
                'updated_at' => '2019-12-19 16:06:52',
            ),
            358 => 
            array (
                'id' => 1738,
                'code' => 'EX.PB.F-008',
                'user_id' => 1816,
                'school_id' => 5,
                'group_id' => 287,
                'created_at' => '2019-12-19 16:06:52',
                'updated_at' => '2019-12-19 16:06:52',
            ),
            359 => 
            array (
                'id' => 1739,
                'code' => 'EX.PB.F-009',
                'user_id' => 1817,
                'school_id' => 5,
                'group_id' => 287,
                'created_at' => '2019-12-19 16:06:52',
                'updated_at' => '2019-12-19 16:06:52',
            ),
            360 => 
            array (
                'id' => 1740,
                'code' => 'EX.PB.F-010',
                'user_id' => 1818,
                'school_id' => 5,
                'group_id' => 287,
                'created_at' => '2019-12-19 16:06:52',
                'updated_at' => '2019-12-19 16:06:52',
            ),
            361 => 
            array (
                'id' => 1741,
                'code' => 'EX.PA.F-001',
                'user_id' => 1633,
                'school_id' => 5,
                'group_id' => 286,
                'created_at' => '2019-12-19 16:15:20',
                'updated_at' => '2019-12-19 16:15:20',
            ),
            362 => 
            array (
                'id' => 1742,
                'code' => 'EX.PA.F-002',
                'user_id' => 1634,
                'school_id' => 5,
                'group_id' => 286,
                'created_at' => '2019-12-19 16:16:04',
                'updated_at' => '2019-12-19 16:16:04',
            ),
            363 => 
            array (
                'id' => 1754,
                'code' => 'EX.PRI-014',
                'user_id' => 1830,
                'school_id' => 86,
                'group_id' => 307,
                'created_at' => '2019-12-20 10:42:12',
                'updated_at' => '2019-12-20 10:47:00',
            ),
            364 => 
            array (
                'id' => 1755,
                'code' => 'EX.KIN-009',
                'user_id' => 1831,
                'school_id' => 86,
                'group_id' => 303,
                'created_at' => '2019-12-20 10:42:12',
                'updated_at' => '2019-12-20 10:42:12',
            ),
            365 => 
            array (
                'id' => 1756,
                'code' => 'EX.KIN-010',
                'user_id' => 1832,
                'school_id' => 86,
                'group_id' => 303,
                'created_at' => '2019-12-20 10:42:12',
                'updated_at' => '2019-12-20 10:42:12',
            ),
            366 => 
            array (
                'id' => 1757,
                'code' => 'EX.KIN-006',
                'user_id' => 1833,
                'school_id' => 86,
                'group_id' => 305,
                'created_at' => '2019-12-20 10:42:12',
                'updated_at' => '2019-12-20 10:45:17',
            ),
            367 => 
            array (
                'id' => 1758,
                'code' => 'EX.KIN-012',
                'user_id' => 1834,
                'school_id' => 86,
                'group_id' => 303,
                'created_at' => '2019-12-20 10:42:12',
                'updated_at' => '2019-12-20 10:42:12',
            ),
            368 => 
            array (
                'id' => 1759,
                'code' => 'EX.KIN-014',
                'user_id' => 1835,
                'school_id' => 86,
                'group_id' => 303,
                'created_at' => '2019-12-20 10:42:13',
                'updated_at' => '2019-12-20 10:42:13',
            ),
            369 => 
            array (
                'id' => 1760,
                'code' => 'EX.KIN-015',
                'user_id' => 1836,
                'school_id' => 86,
                'group_id' => 303,
                'created_at' => '2019-12-20 10:42:13',
                'updated_at' => '2019-12-20 10:42:13',
            ),
            370 => 
            array (
                'id' => 1761,
                'code' => 'EX.KIN-016',
                'user_id' => 1837,
                'school_id' => 86,
                'group_id' => 303,
                'created_at' => '2019-12-20 10:42:13',
                'updated_at' => '2019-12-20 10:42:13',
            ),
            371 => 
            array (
                'id' => 1762,
                'code' => 'EX.KIN-018',
                'user_id' => 1838,
                'school_id' => 86,
                'group_id' => 304,
                'created_at' => '2019-12-20 10:43:33',
                'updated_at' => '2019-12-20 10:43:33',
            ),
            372 => 
            array (
                'id' => 1763,
                'code' => 'EX.KIN-019',
                'user_id' => 1839,
                'school_id' => 86,
                'group_id' => 304,
                'created_at' => '2019-12-20 10:43:33',
                'updated_at' => '2019-12-20 10:43:33',
            ),
            373 => 
            array (
                'id' => 1764,
                'code' => 'EX.KIN-020',
                'user_id' => 1840,
                'school_id' => 86,
                'group_id' => 304,
                'created_at' => '2019-12-20 10:43:33',
                'updated_at' => '2019-12-20 10:43:33',
            ),
            374 => 
            array (
                'id' => 1765,
                'code' => 'EX.KIN-021',
                'user_id' => 1841,
                'school_id' => 86,
                'group_id' => 304,
                'created_at' => '2019-12-20 10:43:33',
                'updated_at' => '2019-12-20 10:43:33',
            ),
            375 => 
            array (
                'id' => 1766,
                'code' => 'EX.KIN-022',
                'user_id' => 1842,
                'school_id' => 86,
                'group_id' => 304,
                'created_at' => '2019-12-20 10:43:33',
                'updated_at' => '2019-12-20 10:43:33',
            ),
            376 => 
            array (
                'id' => 1767,
                'code' => 'EX.KIN-023',
                'user_id' => 1843,
                'school_id' => 86,
                'group_id' => 304,
                'created_at' => '2019-12-20 10:43:33',
                'updated_at' => '2019-12-20 10:43:33',
            ),
            377 => 
            array (
                'id' => 1768,
                'code' => 'EX.KIN-024',
                'user_id' => 1844,
                'school_id' => 86,
                'group_id' => 304,
                'created_at' => '2019-12-20 10:43:33',
                'updated_at' => '2019-12-20 10:43:33',
            ),
            378 => 
            array (
                'id' => 1769,
                'code' => 'EX.KIN-025',
                'user_id' => 1845,
                'school_id' => 86,
                'group_id' => 304,
                'created_at' => '2019-12-20 10:43:34',
                'updated_at' => '2019-12-20 10:43:34',
            ),
            379 => 
            array (
                'id' => 1770,
                'code' => 'EX.KIN-026',
                'user_id' => 1846,
                'school_id' => 86,
                'group_id' => 304,
                'created_at' => '2019-12-20 10:43:34',
                'updated_at' => '2019-12-20 10:43:34',
            ),
            380 => 
            array (
                'id' => 1771,
                'code' => 'EX.KIN-001',
                'user_id' => 1847,
                'school_id' => 86,
                'group_id' => 305,
                'created_at' => '2019-12-20 10:45:17',
                'updated_at' => '2019-12-20 10:45:17',
            ),
            381 => 
            array (
                'id' => 1772,
                'code' => 'EX.KIN-002',
                'user_id' => 1848,
                'school_id' => 86,
                'group_id' => 305,
                'created_at' => '2019-12-20 10:45:17',
                'updated_at' => '2019-12-20 10:45:17',
            ),
            382 => 
            array (
                'id' => 1773,
                'code' => 'EX.KIN-003',
                'user_id' => 1849,
                'school_id' => 86,
                'group_id' => 305,
                'created_at' => '2019-12-20 10:45:17',
                'updated_at' => '2019-12-20 10:45:17',
            ),
            383 => 
            array (
                'id' => 1774,
                'code' => 'EX.KIN-004',
                'user_id' => 1850,
                'school_id' => 86,
                'group_id' => 305,
                'created_at' => '2019-12-20 10:45:17',
                'updated_at' => '2019-12-20 10:45:17',
            ),
            384 => 
            array (
                'id' => 1775,
                'code' => 'EX.KIN-005',
                'user_id' => 1851,
                'school_id' => 86,
                'group_id' => 305,
                'created_at' => '2019-12-20 10:45:17',
                'updated_at' => '2019-12-20 10:45:17',
            ),
            385 => 
            array (
                'id' => 1776,
                'code' => 'EX.KIN-007',
                'user_id' => 1852,
                'school_id' => 86,
                'group_id' => 305,
                'created_at' => '2019-12-20 10:45:17',
                'updated_at' => '2019-12-20 10:45:17',
            ),
            386 => 
            array (
                'id' => 1777,
                'code' => 'EX.PRI-001',
                'user_id' => 1853,
                'school_id' => 86,
                'group_id' => 306,
                'created_at' => '2019-12-20 10:46:19',
                'updated_at' => '2019-12-20 10:46:19',
            ),
            387 => 
            array (
                'id' => 1778,
                'code' => 'EX.PRI-002',
                'user_id' => 1854,
                'school_id' => 86,
                'group_id' => 306,
                'created_at' => '2019-12-20 10:46:19',
                'updated_at' => '2019-12-20 10:46:19',
            ),
            388 => 
            array (
                'id' => 1779,
                'code' => 'EX.PRI-003',
                'user_id' => 1855,
                'school_id' => 86,
                'group_id' => 306,
                'created_at' => '2019-12-20 10:46:19',
                'updated_at' => '2019-12-20 10:46:19',
            ),
            389 => 
            array (
                'id' => 1780,
                'code' => 'EX.PRI-004',
                'user_id' => 1856,
                'school_id' => 86,
                'group_id' => 306,
                'created_at' => '2019-12-20 10:46:20',
                'updated_at' => '2019-12-20 10:46:20',
            ),
            390 => 
            array (
                'id' => 1781,
                'code' => 'EX.PRI-005',
                'user_id' => 1857,
                'school_id' => 86,
                'group_id' => 306,
                'created_at' => '2019-12-20 10:46:20',
                'updated_at' => '2019-12-20 10:46:20',
            ),
            391 => 
            array (
                'id' => 1782,
                'code' => 'EX.PRI-006',
                'user_id' => 1858,
                'school_id' => 86,
                'group_id' => 306,
                'created_at' => '2019-12-20 10:46:20',
                'updated_at' => '2019-12-20 10:46:20',
            ),
            392 => 
            array (
                'id' => 1783,
                'code' => 'EX.PRI-008',
                'user_id' => 1859,
                'school_id' => 86,
                'group_id' => 306,
                'created_at' => '2019-12-20 10:46:20',
                'updated_at' => '2019-12-20 10:46:20',
            ),
            393 => 
            array (
                'id' => 1784,
                'code' => 'EX.PRI-009',
                'user_id' => 1860,
                'school_id' => 86,
                'group_id' => 306,
                'created_at' => '2019-12-20 10:46:20',
                'updated_at' => '2019-12-20 10:46:20',
            ),
            394 => 
            array (
                'id' => 1785,
                'code' => 'EX.PRI-010',
                'user_id' => 1861,
                'school_id' => 86,
                'group_id' => 306,
                'created_at' => '2019-12-20 10:46:20',
                'updated_at' => '2019-12-20 10:46:20',
            ),
            395 => 
            array (
                'id' => 1786,
                'code' => 'EX.PRI-011',
                'user_id' => 1862,
                'school_id' => 86,
                'group_id' => 306,
                'created_at' => '2019-12-20 10:46:20',
                'updated_at' => '2019-12-20 10:46:20',
            ),
            396 => 
            array (
                'id' => 1787,
                'code' => 'EX.PRI-012',
                'user_id' => 1863,
                'school_id' => 86,
                'group_id' => 307,
                'created_at' => '2019-12-20 10:47:00',
                'updated_at' => '2019-12-20 10:47:00',
            ),
            397 => 
            array (
                'id' => 1788,
                'code' => 'EX.PRI-013',
                'user_id' => 1864,
                'school_id' => 86,
                'group_id' => 307,
                'created_at' => '2019-12-20 10:47:00',
                'updated_at' => '2019-12-20 10:47:00',
            ),
            398 => 
            array (
                'id' => 1789,
                'code' => 'EX.PRI-015',
                'user_id' => 1865,
                'school_id' => 86,
                'group_id' => 307,
                'created_at' => '2019-12-20 10:47:01',
                'updated_at' => '2019-12-20 10:47:01',
            ),
            399 => 
            array (
                'id' => 1790,
                'code' => 'EX.PRI-016',
                'user_id' => 1866,
                'school_id' => 86,
                'group_id' => 307,
                'created_at' => '2019-12-20 10:47:01',
                'updated_at' => '2019-12-20 10:47:01',
            ),
        ));
        
        
    }
}