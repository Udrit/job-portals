<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'email' =>'udrit@admin.com',
            'password' => Hash::make('udrit@123'),
            'is_verified'=>'1',
            'usertype'=>'admin'
        ]);
        DB::table('users')->insert([
            'email' =>'dhakal@admin.com',
            'password' => Hash::make('dhakal@123'),
            'is_verified'=>'1',
            'usertype'=>'admin'
        ]);
    }
}
