<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Test User',
            'email' => 'test@gmail.com',
            'phone' => '8000000000',
            'user_type' => 3, // customers
            'password' => '$2y$12$jQRzMWPhdyzB6UDIzrLzlelGOkkpaMtWJkfvmLS5jwOAgQZFwslYW',
        ]);
        User::create([
            'name' => 'Test User 2',
            'email' => 'testuser2@gmail.com',
            'phone' => '8000000001',
            'user_type' => 3, // customers
            'password' => '$2y$12$jQRzMWPhdyzB6UDIzrLzlelGOkkpaMtWJkfvmLS5jwOAgQZFwslYW',
        ]);
    }
}