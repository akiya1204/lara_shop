<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'ctg_id' => 1,
                'category_name' => '野菜',
            ],
            [
                'ctg_id' => 2,
                'category_name' => '果物',
            ],
            [
                'ctg_id' => 3,
                'category_name' => '飲料',
            ],
        ]);
    }
}
