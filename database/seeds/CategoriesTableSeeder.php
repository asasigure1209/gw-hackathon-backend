<?php

use Illuminate\Database\Seeder;

<<<<<<< HEAD
class CategoriesTableSeeder extends Seeder
=======
class CategoriesableSeeder extends Seeder
>>>>>>> yattemita
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        DB::table("categories")->insert([
            [
                'name' => 'business',
                'image_path' => 'aaa'
            ],
            [
                'name' => 'communication',
                'image_path' => 'aaa'
            ],
        ]);
    }
}

=======
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
>>>>>>> yattemita
