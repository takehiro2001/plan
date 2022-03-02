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
        ]);
        DB::table('users')->insert([
            'name' => 'Takesi',
            'email' => 'takesi@yahoo.com',
        ]);
    }
}
