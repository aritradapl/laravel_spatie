<?php

namespace App\Http\Controllers\Admin\Modules\AddEmployeeRole;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Auth;

class EmployeesController extends Controller
{
    public function index()
    {
        $employees = User::where('user_type',3)->get();
        $roles = Role::all();
        $permissions = Permission::all();
        return view('admin.modules.employees.employees',compact('employees','roles','permissions'));
    }
    public function store(Request $request){
        $employee = User::findOrFail($request->employee_id);
        $role = Role::findById($request->role_id, 'admin');
        // Assign role to employee
        $employee->assignRole($role);
        // Handle permissions
        if ($request->has('permissions')) {
            foreach ($request->permissions as $permissionId) {
                $permission = Permission::findById($permissionId, 'admin');
                // Assign permission directly to the role
                $role->givePermissionTo($permission);
                // Assign permission directly to the user
                $employee->givePermissionTo($permission);
            }
        }

        return back()->with('status', 'Role and Permissions Assigned Successfully');
    }
    public function employeeList(){
        $employees = User::where('user_type',3)->get();
        return view('admin.modules.employees.employee_list',compact('employees'));
    }
    public function editRoleView($id){
        $user = User::findOrFail($id);
        $role = $user->roles;
        $permissions = $user->permissions;
        $employees = User::where('user_type', 3)->get();
        $roles = Role::all();
        return view('admin.modules.employees.employees_role_edit', compact('user', 'role', 'permissions', 'employees', 'roles'));
    }

    public function editRole(Request $request){
        $employee = User::findOrFail($request->employee_id);
        // dd($employee);
        $role = Role::findById($request->role_id, 'admin');
        $employee->removeRole($role);
        return back()->with('status','Role Remove Successfully');
    }
}
