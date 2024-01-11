<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Main Admin',
            'email' => 'mainadmin99@slpa.lk',
            'password' => Hash::make('8n4426YmyYPK'),
            'admin' => '1',
        ]);
    }
}
