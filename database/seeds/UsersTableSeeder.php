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
                [
                    'name' => 'Администратор',
                    'email' => 'admin@test.com',
                    'password' => bcrypt('2sj0j3jnd'),
                ],
                [
                    'name' => "Менеджер1",
                    'email' => 'admin2@test.com',
                    'password' => bcrypt('2sj0j3jnd'),
                ], [
                    'name' => "Менеджер2",
                    'email' => str_random(10) . '@gmail.com',
                    'password' => bcrypt('secret'),
                ], [
                    'name' => "Пользователь1",
                    'email' => str_random(10) . '@gmail.com',
                    'password' => bcrypt('secret'),
                ], [
                    'name' => "Пользователь2",
                    'email' => str_random(10) . '@gmail.com',
                    'password' => bcrypt('secret'),
                ], [
                    'name' => "Пользователь3",
                    'email' => str_random(10) . '@gmail.com',
                    'password' => bcrypt('secret'),
                ], [
                    'name' => "Пользователь4",
                    'email' => str_random(10) . '@gmail.com',
                    'password' => bcrypt('secret'),
                ], [
                    'name' => "Пользователь5",
                    'email' => str_random(10) . '@gmail.com',
                    'password' => bcrypt('secret'),
                ], [
                    'name' => "Пользователь6",
                    'email' => str_random(10) . '@gmail.com',
                    'password' => bcrypt('secret'),
                ]]
        );
    }
}
