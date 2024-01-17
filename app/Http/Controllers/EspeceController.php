<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Espece;
use Illuminate\Support\Facades\Log;

class EspeceController extends Controller
{
    //
    public function index(){
        $especes = Espece::all();
        return view('espece/index',['especes' => $especes] );
    }
    
    public function index2(){
        $especes = Espece::all();
        return view('espece/index2',['especes' => $especes] );
    }
    public function create (){
        return view('espece/create');
    } 

    public function save (Request $request){
        Log::info("entrer dans la fonction save");
        $espece = new Espece ();
        $espece->libelle = $request->libelle;
        $espece->guide = $request->guide;
        $espece->price = $request->price;
        if ($request->image) {
            $fileName = 'Uploads/Espece' . '/' . microtime() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('Uploads/Espece'),$fileName);
        $espece->image = $fileName;
        }
        

        $espece->save();
        return redirect()->route('espece.index', 'espece.index2');

    }

    public function show ($id){
        $espece = Espece::find($id);

        return view("espece/show",['espece' => $espece]);
    }

    public function update (Request $request, $id){
        $espece = Espece::find($id);
      
        return view("espece/update",['espece' => $espece]);

    }
    public function edit (Request $request){
        Log::info("Affichage de request");
        Log::info($request->all());
        $espece = Espece::find($request->id);
        $espece->libelle = $request->libelle;
        $espece->guide = $request->guide;
        $espece->price = $request->price;
        if ($request->image) {
            $fileName = 'Uploads/Espece' . '/' . microtime() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('Uploads/Espece'),$fileName);
            $espece->image = $fileName;
        }
        
        $espece->save();


        return redirect()->route('espece.index', 'espece.index2');

    }

    public function delete (){}
}

