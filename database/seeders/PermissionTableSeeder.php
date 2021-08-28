<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

/**
 * Class PermissionTableSeeder.
 *
 * @package Database\Seeders
 */
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $this->resetCached();

        $this->createRoles();
    }

    /**
     * Reset cached roles and permissions
     *
     * @return void
     */
    private function resetCached(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();
    }

    /**
     * @return void
     *
     * @noinspection PhpIncompatibleReturnTypeInspection
     */
    private function createRoles(): void
    {
        collect([
            'super-admin',
            'customer',
            'influencer',
            'enterpriser'
        ])->each(fn(string $role): Role => Role::create(['name' => $role]));
    }
}
