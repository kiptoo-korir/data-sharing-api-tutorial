<?php

namespace Database\Factories;

use App\Models\Activity;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Activity::class;

    public function definition()
    {
        return [
            'log_name' => $this->faker->text(15),
            'description' => $this->faker->text(100),
            'causer_id' => 1,
        ];
    }
}
