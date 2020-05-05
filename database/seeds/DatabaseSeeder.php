<?php

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
<<<<<<< HEAD
        $this->call(CategoriesTableSeeder::class);
=======
        $this->call(CategoryTableSeeder::class);
>>>>>>> yattemita
        $this->call(KipUsersTableSeeder::class);
        
    }
}
