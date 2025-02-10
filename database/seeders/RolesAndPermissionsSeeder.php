<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // / Crear roles
        $admin = Role::create(['name' => 'admin']);
        $user = Role::create(['name' => 'cashier']);

        // Crear permisos
        Permission::create(['name' => 'manage users']);
        Permission::create(['name' => 'edit products']);

        // Asignar permisos a roles
        $admin->givePermissionTo(['manage users', 'edit products']);
        $user->givePermissionTo('edit products');
    }
}
