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
            'name' => 'Dumisani Kaliati',
            'email' => 'admin@admin.com',
            'role' => 'admin',
            'password' => Hash::make('root')
        ]);
        User::create([
            'name' => 'Elijah Kawinga',
            'email' => 'ej@admin.com',
            'role' => 'admin',
            'occupation' => 'Senior Systems Developer',
            'description' => 'Skilled programmer with more than 50 projects completed successfully and over a decade of expirience.',
            'password' => Hash::make('root')
        ]);
        User::create([
            'name' => 'Allan Mpate',
            'email' => 'allan@admin.com',
            'role' => 'admin',
            'password' => Hash::make('root')
        ]);
        User::create([
            'name' => 'Andrew Mpate',
            'email' => 'andrew@admin.com',
            'role' => 'admin',
            'occupation' => '',
            'description' => '',
            'password' => Hash::make('root')
        ]);
        User::create([
            'name' => 'Tresfore Gawani',
            'email' => 'gawani@admin.com',
            'role' => 'admin',
            'password' => Hash::make('root')
        ]);
        User::create([
            'name' => 'Katie Kathiwe Mtambo',
            'email' => 'katie@admin.com',
            'role' => 'admin',
            'password' => Hash::make('root')
        ]);
        User::create([
            'name' => 'Dobbins Jr Kachitsa',
            'email' => 'dobbins@admin.com',
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
