<?php

namespace Database\Factories;

use App\Models\DeepService;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeepServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DeepService::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => json_encode([
                'en' => $this->faker->word(),
                'ar' => $this->faker->word()
            ]),
            'service_id' => 1
        ];
    }
}