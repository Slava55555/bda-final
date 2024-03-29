<?php

namespace Database\Factories;

use App\Models\Summary;
use Illuminate\Database\Eloquent\Factories\Factory;

class SummaryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Summary::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $lvl_id = Null;
        if(mt_rand(1,100) > 10){
            $lvl_id = mt_rand(1, 4);
        }
        return [
            'name' => $this->faker->firstName(),
            'surname' => $this->faker->lastName(),
            'middle_name' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'position_id' => mt_rand(1,2),
            'level_id' => $lvl_id,
            'date' => $this->faker->date(),
            'status_id' => mt_rand(1,4),
            'skills' => $this->faker->text(2000),
            'description' => $this->faker->text(8000),
            'experience' => $this->faker->text(1000)
        ];
    }
}
