<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RoleController extends Controller
{
    public function assignRole(){
        // Role::create(['name' => 'Admin']);
        // Role::create(['name' => 'Editor']);
        // Role::create(['name' => 'Subscriber']);
        // Permission::create(['name' => 'role management']);
        // return 'added';
        if (auth()->user()->can('role management')) {
            return view('backend.roles.assign_role',[
                'users' => User::orderBy('name','asc')->get(),
                'roles' => Role::orderBy('name','asc')->get(),
            ]);
        }else{
            abort(404);
        }

    }
    public function assignRoleUpdate(Request $request){
        if (auth()->user()->can('role management')) {
            $user = User::find($request->user);
            $user->syncRoles($request->role);
            return back();
        }else{
            return abort(404);
        }
    }
    public function roles(){
        if (auth()->user()->can('role management')) {
            return view('backend.roles.index',[
                'roles' => Role::orderBy('name','asc')->get(),
            ]);
        }else{
            return abort(404);
        }
    }
    public function editRole($id){
        if (auth()->user()->can('role management')) {
            return view('backend.roles.edit',[
                'role' => Role::find($id),
                'permissions' => Permission::all(),
            ]);
        }else{
            return abort(404);
        }
    }
    public function givePermission(Request $request){
        if (auth()->user()->can('role management')) {
            $role = Role::where('name',$request->role)->first();
            $role->syncPermissions($request->permission);
            return redirect()->route('backend.role.edit',$role->id);
        }else{
            return abort(404);
        }
    }
    public function indexUser(){
        if (auth()->user()->can('role management')) {
            return view('backend.roles.users',[
                'users' => User::all(),
            ]);
        }else{
            return abort(404);
        }
    }
}
