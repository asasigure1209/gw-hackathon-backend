<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("categories")->insert([
            [
                'name' => 'business',
                'image_path' => 'aaa'
            ],
            [
                'name' => 'mylife',
                'image_path' => 'aaa'
            ],
            [
                'name' => 'communication',
                'image_path' => 'cccc'
            ],
            [
                'name' => 'etc',
                'image_path' => 'afse'
            ]
        ]);
    }
}

