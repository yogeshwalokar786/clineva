<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Default Executive Admin Account (Clineva Research Laboratories)
        Admin::firstOrCreate(
            ['email' => 'admin@clineva.in'],
            [
                'name'     => 'Admin',
                'password' => Hash::make('admin123'),
            ]
        );
    }
}
