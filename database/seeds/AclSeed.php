<?php

use App\Role;
use App\Permission;
use Illuminate\Database\Seeder;


class AclSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()['cache']->forget('spatie.permission.cache');

        $permissions = new Permission();

        foreach ($permissions->defaultPermissions() as $perms) {
            Permission::firstOrCreate(['name' => $perms]);
        }

        $this->command->info('Default Permissions added.');

        $roles = new Role();
        foreach ($roles->defaultRoles() as $role) {
            $role = Role::firstOrCreate(['name' => $role]);

            if ($role->name == 'ketua') {
                $role->givePermissionTo(Permission::all());
            }
        }

        $this->command->info('Default Roles added.');
    }
}
