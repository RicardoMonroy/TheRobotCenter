<?php

use Illuminate\Database\Seeder;
use App\User;
use Caffeinated\Shinobi\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Ricardo Monroy',
            'email' => 'rmonroy.rodriguez@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('Spawn2001!'), // password
            'dashboard' => true,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Usuario Generico',
            'email' => 'usuario@ejemplo.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'), // password
            'dashboard' => false,
            'remember_token' => Str::random(10),
        ]);

        Role::create([
        	'name'		=> 'Programador',
        	'slug'  	=> 'programmer',
        	'special' 	=> 'all-access'
        ]);

        Role::create([
        	'name'		=> 'Usuario',
        	'slug'  	=> 'user',
        	'special' 	=> 'no-access'
        ]);

        //factory(App\User::class, 20)->create();
    }
}
