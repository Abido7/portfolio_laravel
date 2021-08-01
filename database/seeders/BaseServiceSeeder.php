<?php

namespace Database\Seeders;

use App\Models\BaseService;
use Illuminate\Database\Seeder;

class BaseServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BaseService::factory()->count(4)->create();
    }
}