<?php

namespace Database\Seeders;

use App\Models\SocialMedia;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

/**
 * Class SocialMediaSeeder.
 *
 * @package Database\Seeders
 */
class SocialMediaSeeder extends Seeder
{
    /**
     * @const array[string]
     */
    private const SOCIAL_MEDIA = [
        'Instagram',
        'Facebook',
        'Twitter',
        'Youtube',
        'TikTok',
        'WhatsApp'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        foreach (self::SOCIAL_MEDIA as $socialMedia) {
            SocialMedia::create([
                'name' => Str::title($socialMedia),
                'slug' => Str::slug($socialMedia)
            ]);
        }
    }
}
