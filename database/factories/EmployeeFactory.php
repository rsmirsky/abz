<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\Position;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'date_of_employment' => $this->faker->date('Y_m_d'),
            'phone' => $this->faker->randomNumber(9, true),
            'email' => $this->faker->email(),
            'salary' => $this->faker->numberBetween(0,50000000),
            'photo' => $this->faker->image(null, 360, 360, 'animals', true, true, 'cats', true),
            'position_id'=> $this->faker->randomNumber(1, true),
            'head_id' => $this->faker->randomDigitNot(10),
        ];
    }
}
