<?php

namespace Database\Seeders;

use App\Models\Social;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Social::create([
            'facebook' => 'https://www.facebook.com',
            'twitter' => 'https://www.twitter.com',
            'instagram' => 'https://www.instagram.com',
            'company_id' => 1,
        ]);
        Social::factory()->count(5)->create();
    }
}