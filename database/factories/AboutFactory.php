<?php

namespace Database\Factories;

use App\Models\About;
use Illuminate\Database\Eloquent\Factories\Factory;

class AboutFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = About::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => json_encode([
                'en' => $this->faker->text(5),
                'ar' => $this->faker->text(5),
            ]),
            'desc' => json_encode([
                'en' => $this->faker->text(100),
                'ar' => $this->faker->text(100),
            ]),
            'company_id' => 1
        ];
    }
}