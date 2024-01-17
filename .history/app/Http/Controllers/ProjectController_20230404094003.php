<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    public function index (){}
    public function create (){
        return view("project/create");
    }
    public function save (){}
    public function show (){}
    public function delete (){}
}
