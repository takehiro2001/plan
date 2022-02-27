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
        
        // DB::table('menus')->insert([
        //     'date' => '2022-02-26',
        //     'muscle' => '胸',
        //     'body' => '筋トレは世界を救う',
        // ]);
        // DB::table('menus')->insert([
        //     'date' => '2022-02-27',
        //     'muscle' => '腕',
        //     'body' => '筋肉があればば怖くない',
        // ]);
        factory(App\Menu::class, 2)->create();
    }
}
