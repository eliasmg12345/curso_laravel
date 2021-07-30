<?php

namespace Database\Factories;

use App\Models\Automovil;
use Illuminate\Database\Eloquent\Factories\Factory;

class AutomovilFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Automovil::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'marca'=>$this->faker->text('12'),
            'modelo'=>$this->faker->text('12'),
            'color'=>$this->faker->text('12'),
            'precio'=>$this->faker->text('12'),
            'matricula'=>$this->faker->numberBetween($min=2000000,$max=8000000)

        ];
    }
}
