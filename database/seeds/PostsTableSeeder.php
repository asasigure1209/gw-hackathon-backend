<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
              'user_id' => 1,
              'content' => '頑張った',
              'category_id' => 1,
            ],
            [
                'user_id' => 1,
                'content' => '疲れた',
                'category_id' => 1,
            ],
            [
                'user_id' => 1,
                'content' => '眠い',
                'category_id' => 1,
            ],
            [
                'user_id' => 1,
                'content' => 'ヤッフー',
                'category_id' => 1,
            ],
            [
                'user_id' => 1,
                'content' => '頑張った',
                'category_id' => 4,
              ],
              [
                  'user_id' => 1,
                  'content' => 'heeeeeeeeey',
                  'category_id' => 2,
              ],
              [
                  'user_id' => 1,
                  'content' => '眠い',
                  'category_id' => 2,
              ],
              [
                  'user_id' => 1,
                  'content' => 'ヤッフー',
                  'category_id' => 3,
              ],
          ]);
    }
}
