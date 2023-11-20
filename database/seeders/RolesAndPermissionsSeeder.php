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
        $role = Role::create(['name' => 'admin']);

        $role = Role::create(['name' => 'principal']);
        $permission = Permission::create(['name' => 'teachers_view']);
        $permission->assignRole($role);
        $permission = Permission::create(['name' => 'grades_view']);
        $permission->assignRole($role);
        $permission = Permission::create(['name' => 'students_view']);
        $permission->assignRole($role);
        $permission = Permission::create(['name' => 'tasks_view']);
        $permission->assignRole($role);

        $role = Role::create(['name' => 'teachers']);
        $permission = Permission::create(['name' => 'students_create']);
        $permission->assignRole($role);
        $role->givePermissionTo("students_view");
        $permission = Permission::create(['name' => 'students_update']);
        $permission->assignRole($role);
        $permission = Permission::create(['name' => 'tasks_create']);
        $permission->assignRole($role);
        $role->givePermissionTo('tasks_view');
        $permission = Permission::create(['name' => 'tasks_update']);
        $permission->assignRole($role);

        $role = Role::create(['name' => 'students']);
        $role->givePermissionTo('tasks_view');
        $role->givePermissionTo('tasks_update');
    }
}
