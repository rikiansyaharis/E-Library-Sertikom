<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name' => 'root',
                'email' => 'root@gmail.com',
                'password' => Hash::make('root'),
                'role_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('user'),
                'role_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
