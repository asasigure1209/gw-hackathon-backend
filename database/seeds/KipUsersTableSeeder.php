<?php

use Illuminate\Database\Seeder;

class KipUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("kip_users")->insert([
            [
                'uid' => 'asasigure_ice',
                'status' => 'logout',
                'name' => 'あさしぐれ',
                'password' => 'asasigure',
                "image_path" => ''
            ],
            [
                'uid' => 'minami1209',
                'status' => 'logout',
                'name' => 'minami',
                'password' => 'minami',
                "image_path" => ''
            ],
        ]);
    }
}
