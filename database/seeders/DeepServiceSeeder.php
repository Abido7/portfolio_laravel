<?php

namespace Database\Seeders;

use App\Models\DeepService;
use Illuminate\Database\Seeder;

class DeepServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DeepService::factory()->count(10)->create();
    }
}