<?php

namespace App\Http\Controllers;

use App\Models\Entrepot;
use App\Models\Instance;
use App\Models\Mouvement;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function showDetail(Mouvement $mouvement){
    
        $ligneMouvements = $mouvement->LigneMouvements()->get();


        //$ligneMouvements = LigneMouvement::orderBy("id")->paginate(5);
        
        return view('sanru.test.show', ['ligneMouvements' => $ligneMouvements]);
    }

    public function dashboard(){

        $user = auth()->user();

        $entrepot = Entrepot::where('user_id', $user->id)->get()->first();

        $transferts = Mouvement::where('expediteur', $entrepot->id)->orderBy("id")->paginate(3);

        $receptions = Mouvement::where('beneficiaire', $entrepot->id)->orderBy("id")->paginate(3);


        return view('sanru.test.dashboard', ['transferts' => $transferts, 'receptions' => $receptions, 'user' => $user]);

    }
    public function articles(){
        
        $entrepot = Entrepot::where('user_id', auth()->user()->id)->get()->first();

        $instances = Instance::where('entrepot_id', $entrepot->id)->orderBy("id")->paginate(3);;
        
        return view('sanru.instance.index', ['instances' => $instances]);
    }
}
