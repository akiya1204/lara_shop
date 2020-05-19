<?php

//作成したclassを読み込むためのファイル

use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(CategoriesSeeder::class); // 追加
        $this->call(ItemsSeeder::class); // 追加
    }
}
