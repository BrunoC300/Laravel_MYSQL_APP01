<?php

namespace Database\Factories;

use App\Models\siteContacto;

use Illuminate\Database\Eloquent\Factories\Factory;

class siteContactoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = siteContacto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name,
            'telefone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->email,
            'motivo' => $this->faker->numberBetween(1, 3),
            'mensagem' => $this->faker->text(200)
        ];
    }
}
