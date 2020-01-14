<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use Illuminate\Support\Str;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories=['Genel','Teknoloji','Gündem','Sağlık','Spor','Ekonomi','Günlük Yaşam'];
        foreach ($categories as $category){
            $newCategory = new Category;
            $newCategory->name = $category;
            $newCategory->slug = ($category);
            $newCategory->save();
            DB::table('categories')->insert  ([
                'name'=>$category,
                'slug'=>Str::slug($category),
                'created_at'=>now()
            ]);
        }

    }
}
