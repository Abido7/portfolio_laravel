<?php

namespace Database\Factories;

use App\Models\BaseService;
use Illuminate\Database\Eloquent\Factories\Factory;

class BaseServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BaseService::class;

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
            'icon' => 'fas fa-hands-helping',
            'service_id' => 1
        ];
    }
}