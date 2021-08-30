<?php

namespace Database\Factories;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Profile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'business_name' => $this->faker->company,
            'contact_name'  => $this->faker->name,
            'address'  => $this->faker->address,
            'phone'  => $this->faker->numberBetween(1000000000,9999999999),
            'nit'  => $this->faker->numberBetween(10000000,99999999),
            'payment_method'   => 'contra entrega',
            'isr' => $this->faker->numberBetween(11,15),
        ];
    }
}
