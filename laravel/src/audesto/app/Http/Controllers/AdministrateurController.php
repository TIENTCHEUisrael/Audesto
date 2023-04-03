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
            $users = DB::select('select * from users');
            return view('layouts.admin.components.user.list', ['users'=>$users]);
        } else
            return view('auth.register');
    }
    public function userdetail($id)
    {
        if (Auth::check()) {
            $users = DB::select('select * from users where id='.$id);
            return view('layouts.admin.components.user.userdetail', ['users'=>$users]);
        } else
            return view('auth.register');
    }
    public function addmodel()
    {
        if (Auth::check()) {
            
            return view('layouts.admin.components.user.list');
        } else
            return view('auth.register');
    }
    public function listmodel()
    {
        if (Auth::check()) {
            $model = DB::select('select m.*, t.nom "trans" from modele m join transmission t on m.transmission = t.id');
            return view('layouts.admin.components.car.listM', ['modeles'=> $model]);
        } else
            return view('auth.register');
    }
    public function detailmodel($id)
    {
        if (Auth::check()) {
            $model = DB::select('select * from modele where id='.$id);
            return view('auth.layouts.admin.components.user.list', ['model'=>$model]);
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
    {//done
        if (Auth::check()) {
            return view('auth.layouts.admin.components.user.list');
        } else
            return view('auth.register');
    }
    public function addcar()
    {//done
        if (Auth::check()) {
            return view('auth.layouts.admin.components.user.list');
        } else
            return view('auth.register');
    }
    public function listcar()
    {
        if (Auth::check()) {
            $voitures = DB::select('select * from voiture');
            return view('auth.layouts.admin.components.car.listC', ['voitures'=> $voitures]);
        } else
            return view('auth.register');
    }
    public function deletecar()
    {//done
        if (Auth::check()) {
            return view('auth.layouts.admin.components.user.list');
        } else
            return view('auth.register');
    }
    public function cardetail($id)
    {
        if (Auth::check()) {
            $car = DB::select('select * from voiture where id='.$id);
            return view('auth.layouts.admin.components.user.list');
        } else
            return view('auth.register');
    }
    public function updatecar()
    {//done
        if (Auth::check()) {
            return view('auth.layouts.admin.components.user.list');
        } else
            return view('auth.register');
    }
    public function reservation()
    {
        if (Auth::check()) {
            $res = DB::select('select * from reservation');
            return view('auth.layouts.admin.components.user.list', ['res'=>$res]);
        } else
            return view('auth.register');
    }
    public function updatereservation()
    {//done
        if (Auth::check()) {
            return view('auth.layouts.admin.components.user.list');
        } else
            return view('auth.register');
    }
    public function detailreservation()
    {//done
        if (Auth::check()) {
            return view('auth.layouts.admin.components.user.list');
        } else
            return view('auth.register');
    }

    public function profile()
    {
        if (Auth::check()) {
            $user = auth()->user();
            $user = DB::select('select * from user where id='.$user->id);
            return view('auth.layouts.admin.components.user.list');
        } else
            return view('auth.register');
    }
    public function password()
    {//done
        if (Auth::check()) {
            return view('auth.layouts.admin.components.user.list');
        } else
            return view('auth.register');
    }
    public function message()
    {
        if (Auth::check()) {
            $user = auth()->user();
            $user = DB::select('select * from reponse where administrateur='.$user->id);
            return view('auth.layouts.admin.components.user.list');
        } else
            return view('auth.register');
    }
    public function sendmessage()
    {//done
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
