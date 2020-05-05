<?php

use Illuminate\Database\Seeder;

class CategoriesableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("categories")->insert([
            [
                'name' => 'business_skills',
                "image_path" => 'aaa'
            ],
            [
                'name' => 'communication',
                "image_path" => 'aaa'
            ],
        ]);
        //
    }
}
