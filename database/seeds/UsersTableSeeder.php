<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        ['name' => 'Игорь', 'email' => 'igor.kondratyuk@me.com', 'password' => bcrypt('123123123'), 'level' => 777],
        ['name' => 'Павел', 'email' => 'pavel@plinskiy.ru', 'password' => bcrypt('123123123'), 'level' => 777],
        ['name' => 'Александр', 'email' => 'me@zaakk.com', 'password' => bcrypt('123123123'), 'level' => 777]
      ]);
    }
}
