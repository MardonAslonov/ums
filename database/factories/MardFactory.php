<?php

namespace Database\Factories;

use App\Models\Mard;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mard>
 */
class MardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    //protected $model = Mard::class;


    public function definition()
    {
        return [
            'name' => $this -> faker -> company,
            'address' => $this -> faker -> address,
            'phone' => $this -> faker -> e164PhoneNumber,
        ];
    }
}
