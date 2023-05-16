<?php

namespace Database\Factories;

use App\Models\Doctor;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $users = User::all();
        foreach($users as $user)
        {
            if($user->roles()->first()->id == 1)
            {
                $doctorsId[] = $user->id;
            }
        }
        return [
            'phone' =>  strval(fake()->randomNumber(11)) ,
            'address' => fake()->address(),
            'field' => fake()->text(50) ,
        ];
    }
}
