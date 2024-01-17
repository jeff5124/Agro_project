<?php

namespace App\Http\Controllers;
use App\Models\Domaine;
use App\Models\Espece;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class DomaineController extends Controller
{
    //
    public function index(){
        $domaines = Domaine::all();
        return view('domaine/index', [
            "domaines" => $domaines
        ]);
    }

    public function create (){
        return view('domaine/create');
    }

    public function save (Request $request){
        Log::info("entrer dans la fonction save de domaine");
        Log::info($request->image);
        if (!empty($request->image)) {
            $fileName = 'Uploads/Domaine' . '/' . microtime() . '.' . $request->image->getClientOriginalExtension();
            Log::info("fille non null");
            Log::info($fileName);
            $request->image->move(public_path('Uploads/Domaine'),$fileName);
            $request->merge(['image' => $fileName]);
        }else{
            $fileName = null;
            Log::info("Filenam null");
        }
        Log::info("fille name");
        Log::info($fileName);
        $domaine = new Domaine ();
        $domaine->libelle = $request->libelle;
        $domaine->image = $fileName;
        $domaine->save();

        //Espece::create($request->all());
        return Redirect()->route("domaine.index");

    }

    public function update (Request $request, $id){
        $domaine = Domaine::find($id);

        return view("domaine/update",['domaine' => $domaine]);

    }

    public function edit (Request $request){
        Log::info("Affichage de request");
        Log::info($request->all());
        $domaine = Domaine::find($request->id);
        $input = $request->all();

        if (!empty($request->image)) {
            $fileName = 'Uploads/Domaine' . '/' . microtime() . '.' . $request->image->getClientOriginalExtension();
            Log::info("fille non null");
            Log::info($fileName);
            $request->image->move(public_path('Uploads/Domaine'),$fileName);
            $request->merge(['image' => $fileName]);
        }else{
            $fileName = null;
            Log::info("Filenam null");
        }
        //$domaine = new Domaine ();
        $domaine->libelle = $request->libelle;
        $domaine->image = $fileName;
        $domaine->save();

        //$domaine->update($input);
        return redirect()->route('domaine.index');

    }

    public function delete($id){
        Domaine::destroy($id);
        return redirect()->route('domaine.index')->with('flash message', 'Domaine supprimer');
    }
}
