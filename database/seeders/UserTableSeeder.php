<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Md. Admin',
            'role_id' => 1,
            'username' => 'admin',
            'email' => 'admin@blog.com',
            'password' => bcrypt('admin@blog.com'),
            'image' => 'defult.png',
        ]);
        DB::table('users')->insert([
            'name' => 'Md. Author',
            'role_id' => 2,
            'username' => 'author',
            'email' => 'author@blog.com',
            'password' => bcrypt('author@blog.com'),
            'image' => 'defult.png',
        ]);
        DB::table('users')->insert([
            'name' => 'Md. User',

            'username' => 'user',
            'email' => 'user@blog.com',
            'password' => bcrypt('user@blog.com'),
            'image' => 'defult.png',
        ]);
    }
}
