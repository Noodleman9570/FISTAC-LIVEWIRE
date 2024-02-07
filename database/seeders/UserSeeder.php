<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = new User;

        $admin->name = 'Kevin';
        $admin->email = 'kevin@kevin.kevin';
        $admin->password = '12345678';
        $admin->role_id = 1;
        $admin->punto_id = 1;

        $admin->save();
    }
}
