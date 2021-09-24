<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\Seeder;

/**
 * Class UserTableSeeder.
 *
 * @package Database\Seeders
 */
class UserTableSeeder extends Seeder
{
    /**
     * @const array
     */
    private const ADMIN_DATA = [
        'name' => 'Super Admin',
        'email' => 'super@admin.com'
    ] ;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        try {
            $user = User::whereEmail('admin@admin.com')->firstOrFail();
        } catch (ModelNotFoundException $modelNotFoundException) {
            $user = User::factory()->create(self::ADMIN_DATA);
        } finally {
            $user->assignRole('super-admin');
        }
    }
}
