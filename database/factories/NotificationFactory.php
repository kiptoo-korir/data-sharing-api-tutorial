<?php

namespace Database\Factories;

use App\Models\Notification;
use Illuminate\Database\Eloquent\Factories\Factory;

class NotificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Notification::class;

    public function definition()
    {
        return [
            'header' => $this->faker->text(15),
            'content' => $this->faker->text(150),
            'notifiable_id' => 1,
        ];
    }
}
