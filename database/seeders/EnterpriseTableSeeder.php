<?php

namespace Database\Seeders;

use App\Models\Enterprise;
use Illuminate\Database\Seeder;

/**
 * Class EnterpriseTableSeeder.
 *
 * @package Database\Seeders
 */
class EnterpriseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Enterprise::factory()->create(['user_id'])
    }
}
