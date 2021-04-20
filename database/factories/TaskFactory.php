<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $time_remaining_pool = [30, 60, 90];
        $can_be_split_pool = [true, false];
        $is_done_pool = [true, false];

        return [
            'name' => $this->faker->sentence(),
            'time_remaining' => $time_remaining_pool[array_rand($time_remaining_pool)],
            'can_be_split' => $can_be_split_pool[array_rand($can_be_split_pool)],
            'is_done' => $is_done_pool[array_rand($is_done_pool)],
            'importance' => rand(0, 100),
            'urgency' => rand(0, 100),
        ];
    }
}
