<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Cliente::class;

    public function definition()
    {
        return [

        'nome'=>$this->faker->firstName(),
        'sobrenome'=>$this->faker->lastName(),
        'rua'=>$this->faker->streetName(),
        'numero'=>$this->faker->buildingNumber(),
        'bairro'=>$this->faker->citySuffix(),
        'cidade'=>$this->faker->city(),
        'telefone'=>$this->faker->phoneNumber(),
        'email'=>$this->faker->email(),

        ];
    }
}
