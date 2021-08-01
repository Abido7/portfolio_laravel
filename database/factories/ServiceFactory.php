<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Service::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => json_encode([
                'en' => $this->faker->text(30),
                'ar' => $this->faker->text(30),
            ]),
            'desc' => json_encode([
                'en' => $this->faker->text(250),
                'ar' => $this->faker->text(200),
            ]),
            'company_id' => 1
        ];
    }
}