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
                'token' => '',
                'name' => 'あさしぐれ',
                'password' => 'asasigure',
                "image_path" => ''
            ],
            [
                'uid' => 'minami1209',
                'token' => '',
                'name' => 'minami',
                'password' => 'minami',
                "image_path" => ''
            ],
        ]);
    }
}
