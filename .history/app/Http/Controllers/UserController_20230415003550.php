<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $role = Role::where("name","Admin")->first();
        $users = User::where('role_id','<>',$role->id);
        return view('user/index',["users"=>$users]);
    }
    public function index2(){
        $role = Role::where("name","Admin")->first();
        $users = User::where('role_id','==',$role->id);
        return view('user/index2',["users"=>$users]);
    }

    public function save(){

    }
}
