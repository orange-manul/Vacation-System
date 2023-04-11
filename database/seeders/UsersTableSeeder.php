<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * @return void
     */
    public function run(): void
    {
        User::factory()->count(500)->create();


         \App\Models\User::factory()->create([
             'first_name' => 'Sergey',
             'middle_name' => 'Orlov',
             'last_name' => 'Poopkin',
             'email' => 'admin@example.com',
             'password' => Hash::make('12345678'),
             'role' => 0,

         ]);
    }
}
