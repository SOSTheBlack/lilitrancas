<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
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
        $this->resetCached();

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
     */
    private function createSuperAdmin(): void
    {
        $role = Role::findOrCreate('super-admin');

//        try {
//            $user = User::firstOrCreate(['email' => 'jeancesargarcia@gmail.com'], [
//                'name' => 'Jean C. Garcia',
//                'email' => 'jeancesargarcia@gmail.com',
//            ]);
//        } catch (ModelNotFoundException $exception) {
//            $user = User::factory()->create([
//                'name' => 'Jean C. Garcia',
//                'email' => 'jeancesargarcia@gmail.com',
//            ]);
//        } finally {
//            dd($user);
//            $user->assignRole($role);
//        }
    }
}
