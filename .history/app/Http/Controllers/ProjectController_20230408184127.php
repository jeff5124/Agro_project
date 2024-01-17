<?php

namespace App\Http\Controllers;

use App\Models\Domaine;
use App\Models\Espece;
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
        $domaines = Domaine::all();
        $especes = Espece::all();
        return view('project/create',[
            "domaines" => $domaines,
            "especes" => $especes,
        ]);
    }
    public function save (Request $request){
        $project = new Project();
        $project->espece_id = $request->name;
        $project->domaine_id = 'associe';
    }
    public function show ($id){
        return view("project/show");
    }
    public function delete (){}
}
