<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
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
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $this->createSuperAdmin();

        Role::create(['name' => 'manager']);
        Role::create(['name' => 'influencer']);
        Role::create(['name' => 'client']);

        Permission::create(['name' => 'enterprise.index']);
        Permission::create(['name' => 'enterprise.edit']);
        Permission::create(['name' => 'enterprise.view']);
        Permission::create(['name' => 'enterprise.delete']);
        Permission::create(['name' => 'enterprise.store']);
        Permission::create(['name' => 'enterprise.update']);
    }

    /**
     * @return void
     */
    private function createSuperAdmin(): void
    {
        $role = Role::create(['name' => 'super-admin']);

        /** @var User $user */
        $user = User::factory()->create([
            'name' => 'Jean C. Garcia',
            'email' => 'jeancesargarcia@gmail.com',
        ]);

        $user->assignRole($role);
    }
}
