<?php

namespace Database\Seeders;

use App\Models\Integration;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

/**
 * Class SocialMediaSeeder.
 *
 * @package Database\Seeders
 */
class IntegrationSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        foreach (Integration::SOCIAL_MEDIA as $socialMedia) {
            Integration::create([
                'name' => Str::title($socialMedia),
                'slug' => Str::slug($socialMedia),
            ]);
        }
    }
}
