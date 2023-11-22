<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('posts')->insert([
            'user_id' => 1, // Associate with the user you created
            'title' => 'First Post',
            'content' => 'This is the content of the first post.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
