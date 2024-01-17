<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    public function index (){
        $projects = Project::all();
        return view("project/index");
    }
    public function create (){
        return view("project/create");
    }
    public function save (Request $request){

    }
    public function show ($id){
        return view("project/show")
    }
    public function delete (){}
}
