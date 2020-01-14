<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = ['Hakkımda', 'Danışmanlık', 'Reklam&Sponsorluk', 'İletişim'];
        $count = 0;
        foreach ($pages as $page) {
            $count++;
            DB::table('pages')->insert([
                'title' => $page,
                'slug' => ($page),
                'image' => 'https://elabedu.eu/wp-content/uploads/2019/05/business-3152586_1920.jpg',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit sed do euismod tempor',
                'order' => $count,
                'created_at' => now(),
                'updated_at'=>now()
            ]);
        }
    }
}
