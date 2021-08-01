<?php

namespace Database\Seeders;

use App\Models\BaseService;
use App\Models\DeepService;
use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        Service::factory()->count(1)->create();
    }
}