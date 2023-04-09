<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {




        User::insert([
            'name' => "Juan Diego",
            'last_name' => "Mejia Maestre",
            'role_id' => 1,
            'birth_day' => date("2001/07/31"),
            'email' => "mejiamaestrejuandiego@gmail.com",
            'password' => '$2y$10$ulFQn8GqJKroxRW0tQ5zZ..mfTXRy.hq25Ep76WraJA2XNXGDj80m', //admin
            'active' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
