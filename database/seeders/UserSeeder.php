<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Adminitrador',
                'username' => 'admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('admin'),
                'role' => 'admin',
                'is_active' => true,
            ],
            [
                'name' => 'Autor',
                'username' => 'autor',
                'email' => 'autor@autor.com',
                'password' => bcrypt('autor'),
                'role' => 'autor',
                'is_active' => true,
            ],
            [
                'name' => 'Usuario',
                'username' => 'user',
                'email' => 'user@user.com',
                'password' => bcrypt('user'),
                'role' => 'user',
                'is_active' => true,
            ],
        ]);
    }
}
