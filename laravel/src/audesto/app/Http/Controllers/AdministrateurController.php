<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdministrateurController extends Controller
{
    public function userlist()
    {
        if (Auth::check()) {
            return view('layouts.admin.components.user.list');
        } else
            return view('auth.register');
    }
    public function addmodel()
    {
        if (Auth::check()) {
            return view('auth.layouts.admin.components.user.list');
        } else
            return view('auth.register');
    }
    public function listmodel()
    {
        if (Auth::check()) {
            return view('auth.layouts.admin.components.user.list');
        } else
            return view('auth.register');
    }
    public function detailmodel()
    {
        if (Auth::check()) {
            return view('auth.layouts.admin.components.user.list');
        } else
            return view('auth.register');
    }
    public function updatemodel()
    {
        if (Auth::check()) {
            return view('auth.layouts.admin.components.user.list');
        } else
            return view('auth.register');
    }
    public function deletemodel()
    {
        if (Auth::check()) {
            return view('auth.layouts.admin.components.user.list');
        } else
            return view('auth.register');
    }
    public function addcar()
    {
        if (Auth::check()) {
            return view('auth.layouts.admin.components.user.list');
        } else
            return view('auth.register');
    }
    public function listcar()
    {
        if (Auth::check()) {
            return view('auth.layouts.admin.components.user.list');
        } else
            return view('auth.register');
    }
    public function deletecar()
    {
        if (Auth::check()) {
            return view('auth.layouts.admin.components.user.list');
        } else
            return view('auth.register');
    }
    public function cardetail()
    {
        if (Auth::check()) {
            return view('auth.layouts.admin.components.user.list');
        } else
            return view('auth.register');
    }
    public function updatecar()
    {
        if (Auth::check()) {
            return view('auth.layouts.admin.components.user.list');
        } else
            return view('auth.register');
    }
    public function reservation()
    {
        if (Auth::check()) {
            return view('auth.layouts.admin.components.user.list');
        } else
            return view('auth.register');
    }
    public function updatereservation()
    {
        if (Auth::check()) {
            return view('auth.layouts.admin.components.user.list');
        } else
            return view('auth.register');
    }
    public function detailreservation()
    {
        if (Auth::check()) {
            return view('auth.layouts.admin.components.user.list');
        } else
            return view('auth.register');
    }

    public function profile()
    {
        if (Auth::check()) {
            return view('auth.layouts.admin.components.user.list');
        } else
            return view('auth.register');
    }
    public function password()
    {
        if (Auth::check()) {
            return view('auth.layouts.admin.components.user.list');
        } else
            return view('auth.register');
    }
    public function message()
    {
        if (Auth::check()) {
            return view('auth.layouts.admin.components.user.list');
        } else
            return view('auth.register');
    }
    public function sendmessage()
    {
        if (Auth::check()) {
            return view('auth.layouts.admin.components.user.list');
        } else
            return view('auth.register');
    }

    public function savecontact(Request $validated)
    {
        //$validated = $request->validated();
        $user = auth()->user();

        $query = DB::table('contact')->insert([
            'subject' => $validated->input('subject'),
            'email' => $validated->input('email'),
            'message' => $validated->input('message'),
            'client' => $user->id
        ]);
        return "OK";
    }
    public function faq()
    {
        if (Auth::check()) {
            return view('layouts.client.faq');
        } else
            return view('auth.register');
    }

    public function dashboard()
    {
        $user = auth()->user();
        
        if (Auth::check()) {
            $complet = DB::select('select COUNT(id) "num", COUNT(id) from reservation where client='.$user->id. ' and statut =3');
            $incomplet = DB::select('select COUNT(id) "num" from reservation where client='.$user->id. ' and statut =1');
            $reservations = DB::select('select  r.*, rs.nom "statut", m.nom "mod",agd.quartier "agdquar",agd.rue "agdrue", agr.quartier "agrquar", agr.rue "agrrue" ,r.montant/m.prix "dur" from reservation r join resstatut rs on r.statut = rs.id 
            join modele m on m.id = r.model join points agd on r.agence_depot = agd.id join points agr on agr.id = r.agence_recup
            where year(r.createdAt) = year(curdate()) and r.client ='.$user->id);
            $model = DB::select('select m.*, t.nom "trans" from modele m join transmission t on m.transmission = t.id limit 10');
            $contact = DB::select('select c.message "question", rep.message "reponse" from contact c join reponse rep on rep.question = c.id where client='.$user->id);
            return view('layouts.admin.components.dashboard',['complet'=>$complet, 'incomplet'=>$incomplet, 'reservations'=> $reservations, 'modeles'=>$model, 'contact'=>$contact]);
        } else
            return view('auth.register');
    }
}
