<?php

use Illuminate\Database\Seeder;
use App\Group;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Group::create([
            'name'      => '1A',
            'level_id'  => '1',
            'school_id' => '1',
            'course_id' => '1',
        ]);
    }
}
