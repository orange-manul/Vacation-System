<?php

namespace Database\Seeders;

use App\Models\Vacation;
use Illuminate\Database\Seeder;

class VacationsTableSeeder extends Seeder
{
    /**
     * @return void
     */
    public function run(): void
    {
        Vacation::factory()->count(500)->create();
    }
}
