<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Entrepot;
use App\Models\EntiteAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\EntrepotCreateRequest;
use App\Http\Requests\EntrepotUpdateRequest;
use App\Models\Mouvement;
use Illuminate\Support\Arr;

class EntrepotController extends Controller
{

    public $users;

    public function __construct(){
        
        $this->users = User::getAllUsers();

    }

    public function index(){

        //dd($this->users);

        //Auth::logout();

        $entrepots = Entrepot::orderBy("nom")->paginate(5);

        
        return view('sanru.entrepot.index', ['entrepots' => $entrepots]);
    }

    public function destroy(Entrepot $entrepot){
    
        $name = $entrepot->nom;

        if($entrepot->delete())
        {
            Alert::success('Fait', "$name a été supprimé avec succès !");
        }else{
            Alert::error('Dommage', 'Quelque chose n\'a pas bien marché, aucune donnée n\'a été affectée !');
        }
        
        return redirect()->route('entrepot.index');

   }
   public function edit(Entrepot $entrepot){
        
        $entiteAdmins = EntiteAdmin::all();
        $users = User::all();

        return view('sanru.entrepot.edit', compact('entrepot', 'entiteAdmins', 'users'));
   }

   public function update(Entrepot $entrepot, EntrepotUpdateRequest $request){
    
    $entrepot->nom = $request->get('name');
    $entrepot->entite_admin = $request->get('localisation');
    $entrepot->user_id = $request->get('utilisateur');

    if($entrepot->update())
    {
        Alert::success('Fait', "La mise à jour de $entrepot->nom a été faite avec succès !");
    }else{
        Alert::error('Dommage', 'Quelque chose n\'a pas bien marché, aucune donnée n\'a été affectée !');
    }
    
    return redirect()->route('entrepot.index');

   }

   public function create(){

        $entiteAdmins = EntiteAdmin::all();
        $users = User::all();
        
        return view('sanru.entrepot.create', ['entiteAdmins' => $entiteAdmins, 'users' => $users]);
    
    }
    public function store(Entrepot $entrepot, EntrepotCreateRequest $request){
        
        $entrepot->nom = $request->get('name');
        $entrepot->entite_admin = $request->get('localisation');
        $entrepot->user_id = $request->get('utilisateur');

        if($entrepot->save())
        {
            Alert::success('Fait', 'Ajout effectué');
        }else{
            Alert::error('Dommage', 'Quelque chose n\'a pas bien marché !');
        }

        return redirect()->route('entrepot.index');

       }
}
