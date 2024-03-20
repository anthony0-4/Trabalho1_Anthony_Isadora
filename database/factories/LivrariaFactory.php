<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Livraria>
 */
class LivrariaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nome'=>$this->faker->word(),
            'endereco'=>$this->faker->word(),
            'cnpj'=>$this->faker->word(),
            'cidade'=>$this->faker->word(),
        ];
    }
}
