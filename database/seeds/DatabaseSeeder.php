<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(LevelsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(SchoolsTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(HomePageTableSeeder::class);
        $this->call(MaterialsTableSeeder::class);
        $this->call(GroupsTableSeeder::class);
        $this->call(StudentsTableSeeder::class);
        $this->call(TeachersTableSeeder::class);
        $this->call(CourseGroupTableSeeder::class);
    }
}
