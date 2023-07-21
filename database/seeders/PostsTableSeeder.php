<?php

namespace Database\Seeders;

use App\Models\Posts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //
        Posts::create([
            'id'=>'',
            'user_id' => '002',
            'body' => 'やうやう白くなりゆく',
            'created_at' => '2023/07/15',
            'update_at' => '23:12',
        ]);

        Posts::create([
            'id'=>'',
            'user_id' => '003',
            'body' => '春はあけぼの',
            'created_at' => '2023/07/18',
            'update_at' => '21:15',
        ]);
    }
}
