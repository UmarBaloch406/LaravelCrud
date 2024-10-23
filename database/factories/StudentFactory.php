<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'father_name' => $this->faker->name('male'),
            'class_name' => 'Class ' . $this->faker->randomElement(['A', 'B', 'C']),
            'roll_no' => $this->faker->unique()->numberBetween(1, 100),
        ];
    }
}
