<?php

namespace Database\Factories;

use App\Models\Testimonial;
use Illuminate\Database\Eloquent\Factories\Factory;

class TestimonialFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Testimonial::class;

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
            'name' => $this->faker->word(),
            'email' => "t@t$i.com",
            'img' => "testimonials/$i.jpg",
            'comment' => $this->faker->text(255),
            'company_id' => 1
        ];
    }
}