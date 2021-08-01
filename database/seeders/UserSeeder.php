<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'mahmoud',
            'email' => "a@a.com",
            'img' => "",
            'password' => Hash::make(123456),
            'role_id' => 1
        ]);
        User::create([
            'name' => 'mahmoud',
            'email' => "a@a2.com",
            'img' => "",
            'password' => Hash::make(123456),
            'role_id' => 2
        ]);
        User::factory()->count(4)->create();
    }
}