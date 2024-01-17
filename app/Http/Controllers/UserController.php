<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index(){
        $role = Role::where("name","Admin")->first();
        $users = User::where('role_id','<>',$role->id)->get();
        Log::info($users);
        return view('user/index',["users"=>$users]);
    }
    public function index2(){
        $role = Role::where("name","Admin")->first();
        $roles = Role::where("name","<>","Simple")->get();
        $users = User::where('role_id',$role->id)->get();
        Log::info($role);
        Log::info($users);
        return view('user/index2',["users"=>$users,"roles"=> $roles]);
    }

    public function save(Request $request){
        //$password = Str::random(6);
        $password = "password";
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => $request->role_id,
            'password' => Hash::make($password),
        ]);
        return redirect()->route('index2');
    }
    public function disable($id){
        //$password = Str::random(6);
        $user = User::find($id);
        $user->status = false;

        return redirect()->route('index2');
    }
}
