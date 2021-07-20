<?php

namespace Database\Seeders;

use App\Models\Enterprise;
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

        $role = Role::create(['name' => 'super-admin']);

        /** @var User $user */
        $user = User::factory()->create([
            'name' => 'Jean C. Garcia',
            'email' => 'jeancesargarcia@gmail.com',
        ]);

        $user->assignRole($role);

        /** @var Enterprise $enterprise */
        $enterprise = Enterprise::factory()->create(['active' => true, 'user_id' => $user->id]);
        $enterprise->users()->attach($user->id);

//        $user->enterprises()->attach($enterprise->id);

        Permission::create(['name' => 'enterprise']);
        Permission::create(['name' => 'enterprise.index']);
        Permission::create(['name' => 'enterprise.edit']);
        Permission::create(['name' => 'enterprise.view']);
        Permission::create(['name' => 'enterprise.delete']);
        Permission::create(['name' => 'enterprise.store']);
        Permission::create(['name' => 'enterprise.update']);
    }
}