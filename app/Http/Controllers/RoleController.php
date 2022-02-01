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
        // $permission = Permission::create(['name' => 'site settings']);
        // return 'ok';

        return view('backend.roles.assign_role',[
            'users' => User::all(),
            'roles' => Role::all(),
        ]);
    }
}
