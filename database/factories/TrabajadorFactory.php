<?php

namespace Database\Factories;

use App\Models\Trabajador;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
use Illuminate\Support\Testing\Fakes\Fake;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trabajador>
 */
class TrabajadorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Trabajador::class;

    public function definition(): array
    {
        $faker = Faker::create();
        return [
            'name' => $faker->unique()->text(50),
            'surname' => $faker->unique()->text(50),
            'email' => $faker->unique()->text(50),
            'telefono' => $faker->numberBetween(100000000,900000000),
            'hobbies' => $faker->optional()->paragraph(4),

        ];
    }
}
