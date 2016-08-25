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
        factory(\Projeto\Entities\User::class)->create([
            'name'=>'Ivan Santos',
            'email'=>'ivan@santos.com',
            'password' => bcrypt(123456),
        ]);
    }
}
