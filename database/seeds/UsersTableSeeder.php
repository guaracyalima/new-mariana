<?php

use App\User;
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
        factory(User::class)->create([
            'name' => 'User Common',
            'email' => 'user@user.com',
            'password' => bcrypt(123456),
            'remember_token' => str_random(10)]);

        factory(User::class)->create([
            'name' => 'Admin root',
            'email' => 'root@user.com',
            'password' => bcrypt(123456),
            'role' => 'root',
            'remember_token' => str_random(10)]);

        factory(User::class)->create([
            'name' => 'Rikudou Hakernin Rootolino da Silva',
            'email' => 'rikudou@user.com',
            'password' => bcrypt(123456),
            'role' => 'admin',
            'remember_token' => str_random(10)]);



    }
}
