<?php

namespace App\Http\Controllers;

use App\Models\Domaine;
use App\Models\Espece;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ProjectController extends Controller
{
    //
    public function index (){
        $projects = Project::all();
        return view("project/index",['projects'=>$projects]);
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
        $project->user_id = Auth::user()->id;
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
        $project->save();
        return redirect()->route('project.index');
    }
    public function show ($id){
        $project = Project::where('id',$id)->first();
        return view("project/show",
        ["project" => $project]);
    }
    public function update ($id){
        $project = Project::where('id',$id)->first();
        return view("project/update",["project" => $project]);
    }
    public function edit (Request $request){
        Log::info("in project save");
        Log::info($request->all());
        $project = Project::where('id',$request->id)->first();
        //$project->user_id = Auth::user()->id;

            $project->validated_by = Auth::user()->id;
            $project->validated_at = now();
            $project->status = $request->status;
            $project->start_at = $request->start_at;
            $project->amount = $request->amount;

            $project->save();
        return redirect()->route('project.show',$project->id);
    }
    public function delete (){}
}
