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

    public function create (){
        return view('espece/create');
    }

    public function save (Request $request){
        Log::info("entrer dans la fonction save");
        $espece = new Espece ();
        $espece->libelle = $request->libelle;
        $espece->guide = $request->guide;

        $fileName = 'Uploads/Espece' . '/' . microtime() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('Uploads/Espece'),$fileName);
        $espece->image = $fileName;

        $espece->save();
        return redirect()->back();

    }

    public function show ($id){
        $espece = Espece::find($id);

        return view("espece/show");
    }
    public function delete (){}
}

