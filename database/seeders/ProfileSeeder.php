<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('profiles')->insert([
            'user_id' => 1, // Associate with the user you created
            'bio' => 'A Laravel enthusiast',
            'website' => 'https://example.com',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
