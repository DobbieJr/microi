<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'role' => 'admin',
            'password' => Hash::make('root')
        ]);
        User::create([
            'name' => 'staff',
            'email' => 'staff@staff.com',
            'role' => 'staff',
            'password' => Hash::make('root')
        ]);
        User::create([
            'name' => 'human',
            'email' => 'user@user.com',
            'role' => 'normal',
            'password' => Hash::make('root')
        ]);
    }
}
