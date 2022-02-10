<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RoleController extends Controller
{
    public function assignRole(){

        // $role = Role::create(['name' => 'Admin']);
        // $permission = Permission::create(['name' => 'role management']);
        // return 'ok';

        return view('backend.roles.assign_role',[
            'users' => User::orderBy('name','asc')->get(),
            'roles' => Role::orderBy('name','asc')->get(),
        ]);
    }
    public function assignRoleUpdate(Request $request){
        // return $request;
        $user = User::find($request->user);
        // return $request->user;
        // return $request->user;
        $user->syncRoles($request->role);
        return back();
    }
    public function roles(){
        return view('backend.roles.index',[
            'roles' => Role::orderBy('name','asc')->get(),
        ]);
    }
    public function editRole($id){
        return view('backend.roles.edit',[
            'role' => Role::find($id),
            'permissions' => Permission::all(),
        ]);
    }
    public function givePermission(Request $request){
        // return $request;
        $role = Role::where('name',$request->role)->first();
        $role->syncPermissions($request->permission);
        return redirect()->route('backend.role.edit',$role->id);
    }
    public function indexUser(){
        return view('backend.roles.users',[
            'users' => User::all(),
        ]);
    }
}
