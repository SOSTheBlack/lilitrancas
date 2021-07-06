<?php

namespace Database\Factories;

use App\Models\Enterprise;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Class EnterpriseFactory.
 *
 * @package Database\Factories
 */
class EnterpriseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Enterprise::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $document_type = $this->faker->randomKey(Enterprise::DOCUMENT_TYPE);

        return [
            'name' => $this->faker->company(),
            'logo' => $this->faker->imageUrl(),
            'description' => $this->faker->text(),
            'link_redirect' => $this->faker->url(),
            'document_type' => $document_type,
            'document_number' => $this->faker->numerify($document_type === 'cpf' ? '###########' : '##############')
        ];
    }
}
