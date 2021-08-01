<?php

namespace Database\Factories;

use App\Models\Social;
use Illuminate\Database\Eloquent\Factories\Factory;

class SocialFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Social::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $i = 1;
        $i++;
        return [
            'facebook' => 'https://www.facebook.com',
            'twitter' => 'https://www.twitter.com',
            'instagram' => 'https://www.instagram.com',
            'linkedin' => $i >= 2 ? "https://www.linkedin.com" : null,
            'user_id' => $i,
        ];
    }
}