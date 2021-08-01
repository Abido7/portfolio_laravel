<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Home;
use Illuminate\Database\Eloquent\Factories\Factory;

class HomeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Home::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $i = 0;
        $i++;
        return [
            'title' => json_encode([
                'en' => $this->faker->text(20),
                'ar' => $this->faker->text(20)
            ]),
            'bio' => json_encode([
                'en' => $this->faker->text(100),
                'ar' => $this->faker->text(100)
            ]),
            'img' => "home/$i.jpg",
            'company_id' => 1

        ];
    }
}