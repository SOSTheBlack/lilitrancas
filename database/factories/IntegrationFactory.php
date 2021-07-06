<?php

namespace Database\Factories;

use App\Models\Integration;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * Class IntegrationFactory.
 *
 * @package Database\Factories
 */
class IntegrationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Integration::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $companyName = $this->faker->company;

        return [
            'name' => $companyName,
            'slug' => Str::slug($companyName),
            'description' => $this->faker->text,
            'settings' => []
        ];
    }
}
