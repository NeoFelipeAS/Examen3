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
        // $this->call(UsersTableSeeder::class);
        $user = new App\User();
        $user->password = bcrypt('1234');
        $user->email = 'web@gmail.com';
        $user->name = 'Administrador de sistema';
        $user->rol = 'administrador';
        $user->foto = 'beach-boy-daytime-1121796.jpg';
        $user->save();
    }
}
