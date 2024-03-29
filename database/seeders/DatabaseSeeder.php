<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            CompanySeeder::class,
            HomeSeeder::class,
            AboutSeeder::class,
            ServiceSeeder::class,
            ContactSeeder::class,
            TestimonialSeeder::class,
            SocialSeeder::class,
            BaseServiceSeeder::class,
            DeepServiceSeeder::class,
        ]);
    }
}