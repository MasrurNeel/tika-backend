<?php

namespace Database\Factories;

use App\Models\People;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\People>
 */
class PeopleFactory extends Factory
{
    protected $model = People::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_no' => $this->faker->ean8(),
            'dob' => $this->faker->dateTime(),
            'office' => $this->faker->word(),
            'registered'=> rand(0,1),
        ];
    }
}
