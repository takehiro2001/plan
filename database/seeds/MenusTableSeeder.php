<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('menus')->insert([
            'date' => '2022-03-15',
            'muscle' => '胸',
            'body' => '筋トレは世界を救う',
            'user_id' => 1
        ]);
        DB::table('menus')->insert([
            'date' => '2022-03-20',
            'muscle' => '腕',
            'body' => '筋肉があればば怖くない',
            'user_id' => 1
        ]);
        // factory(App\Menu::class, 3)->create();
    }
}
