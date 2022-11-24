<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RolController extends Controller
{
    public function index(){
        $role=Role::paginate();
        return view('roles.index',compact('role'));
    }
    public function create(Request $request){
        Role::Create(['name'=>$request->name]);
        return redirect()->route('roles.index')
        ->with('success', 'Rol creado con exito.');
    }
}
