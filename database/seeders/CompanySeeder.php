<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Role;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'name' => 'bezel',
            'user_id' => Role::where('name', 'admin')->first()->id,
        ]);
    }
}