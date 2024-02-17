<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
       // Create roles
       $adminRole = Role::create(['name' => 'admin', 'guard_name' => 'admin']);
       $employeeRole = Role::create(['name' => 'employee', 'guard_name' => 'admin']);

       // Create permissions for pages
       Permission::create(['name' => 'view home', 'guard_name' => 'admin']);
       Permission::create(['name' => 'view page1', 'guard_name' => 'admin']);
       Permission::create(['name' => 'add employees role', 'guard_name' => 'admin']);
       Permission::create(['name' => 'remove employees role', 'guard_name' => 'admin']);
    }
}
