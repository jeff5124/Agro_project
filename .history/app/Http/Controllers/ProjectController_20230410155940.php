<?php

namespace App\Http\Controllers;

use App\Models\Domaine;
use App\Models\Espece;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
        Log::info("in project save");
        Log::info($request->all());
        $project->espece_id = $request->espece_id;
        $project->domaine_id = $request->domaine_id;
        $project->nombre = $request->nombre;
        $project->age = $request->age;
        $project->race = $request->race;
        $project->genre = $request->genre;
        $project->poid = $request->poid;
        $project->couleur_yeux = $request->couleur_yeux;
        $project->pellage = $request->pellage;
        $project->couleur_yeux = $request->couleur_yeux;
        $project->amount = $request->amount;
    }
    public function show ($id){
        return view("project/show");
    }
    public function delete (){}
}
