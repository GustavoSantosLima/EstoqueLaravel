<?php

use Estoque\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Gustavo Santos',
            'email' => 'gustavo@teste.com',
            'password' => bcrypt('123456')
        ]);
    }
}
