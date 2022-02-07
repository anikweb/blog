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
    public function roles(){
        return view('backend.roles.index',[
            'roles' => Role::orderBy('name','asc')->get(),
        ]);
    }
    public function editRole($id){
        // return ;

        return view('backend.roles.edit',[
            'role' => Role::find($id),
            'permissions' => Permission::all(),
        ]);
    }
}
