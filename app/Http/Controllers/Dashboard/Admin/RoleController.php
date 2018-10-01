<?php

namespace App\Http\Controllers\Dashboard\Admin;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    public function index(Request $request)
    {
        $roles = Role::orderBy('id','DESC')->paginate(5);
        return view('dashboard.admin.roles.index',compact('roles'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        $permission = Permission::get();
        return view('dashboard.admin.roles.create',compact('permission'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:roles,name'
        ]);
        $role = Role::create(['name' => 'writer']);

        foreach ($request->input('permission') as $key => $value) {
            $role->givePermissionTo($value);
        }

        return redirect()->route('dashboard.admin.roles.index')
            ->with('success','Role created successfully');
    }
    public function show(Role $role)
    {
        $rolePermissions = $role->permissions()->get();

        return view('dashboard.admin.roles.show',compact('role','rolePermissions'));
    }
    public function edit($id)
    {
        if (!\Ntrust::can('role-edit')) {\App::abort(403);}
        $role = Role::find($id);
        $permission = Permission::get();
        $rolePermissions = \DB::table("permission_role")->where("permission_role.role_id",$id)
            ->pluck('permission_role.permission_id','permission_role.permission_id')->all();

        return view('roles.edit',compact('role','permission','rolePermissions'));
    }
    public function update(Request $request, $id)
    {
        if (!\Ntrust::can('role-edit')) {\App::abort(403);}
        $this->validate($request, [
            'display_name' => 'required',
            'description' => 'required',
            'permission' => 'required',
        ]);

        $role = Role::find($id);
        $role->display_name = $request->input('display_name');
        $role->description = $request->input('description');
        $role->save();

        \DB::table("permission_role")->where("permission_role.role_id",$id)
            ->delete();

        foreach ($request->input('permission') as $key => $value) {
            $role->attachPermission($value);
        }

        return redirect()->route('roles.index')
            ->with('success','Role updated successfully');
    }
    public function destroy($id)
    {
        if (!\Ntrust::can('role-delete')) {\App::abort(403);}
        DB::table("roles")->where('id',$id)->delete();
        return redirect()->route('roles.index')
            ->with('success','Role deleted successfully');
    }
}
