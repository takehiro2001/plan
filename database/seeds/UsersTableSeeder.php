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
            'name' => 'Hanako',
            'email' => 'hanako@gmail.com',
            'password' => bcrypt('hanako')
        ]);
        DB::table('users')->insert([
            'name' => 'Takesi',
            'email' => 'takesi@yahoo.com',
            'password' => bcrypt('takesi')
        ]);
    }
}
