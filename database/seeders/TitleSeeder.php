<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titles')->insert(
            [
                ['title' => 'demo1', 'slug' => 'demo1',],
                ['title' => 'demo2', 'slug' => 'demo2',],
                ['title' => 'demo13', 'slug' => 'demo3'],
                ['title' => 'demo14', 'slug' => 'demo4'],
                ['title' => 'demo15', 'slug' => 'demo5'],
                ['title' => 'demo16', 'slug' => 'demo6'],
            ],
        );
    }
}
