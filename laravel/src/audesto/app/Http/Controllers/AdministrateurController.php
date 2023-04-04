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
            $recom = DB::select('select * from recommandation');
            $cat = DB::select('SELECT * FROM categorie');
            $trans = DB::select('SELECT * FROM transmission');
            return view('layouts.admin.components.car.modeldetail', ['model'=>$model, 'recom'=>$recom, 'cat'=>$cat, 'trans'=>$trans]);
        } else
            return view('auth.register');
    }
    public function updatemodel(Request $validated)
    {
        if (Auth::check()) {
            DB::table('modele')
            ->where('id', $validated->input('id'))
            ->update(['nom' => $validated->input('nom'), 'description' => $validated->input('description'),
                'titre' => $validated->input('titre'), 'recommandation' => $validated->input('recommandation'),
                'transmission' => $validated->input('transmission'), 'longeur' => $validated->input('longeur'),
                'largeur' => $validated->input('largeur'), 'hauteur' => $validated->input('hauteur'),
                'titre' => $validated->input('titre'), 'recommandation' => $validated->input('portes'),
                'places' => $validated->input('places'), 'prix' => $validated->input('prix')
        ]);
        return redirect('/Administrateur/listmodel')->with('success', "Account successfully registered.");
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
    {
        if (Auth::check()) {
            $model = DB::select('select * from modele');
            return view('layouts.admin.components.car.car',['model'=>$model]);
        } else
            return view('auth.register');
    }
    public function listcar()
    {
        if (Auth::check()) {
            $voitures = DB::select('select v.*, m.nom "model" from voiture v join modele m on v.modele = m.id');
            return view('layouts.admin.components.car.listC', ['voitures'=> $voitures]);
        } else
            return view('auth.register');
    }
    public function savecar(Request $validated)
    {
        //$validated = $request->validated();
        $user = auth()->user();

        $query = DB::table('voiture')->insert([
            'matricule' => $validated->input('matricule'),
            'chassis' => $validated->input('chassis'),
            'modele' => $validated->input('modele'),
        ]);
        return redirect('/Administrateur/listcar')->with('success', "Account successfully registered.");
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
            $res = DB::select('select  r.*, rs.nom "statut",u.name "name", m.nom "mod",agd.quartier "agdquar",agd.rue "agdrue", agr.quartier "agrquar", agr.rue "agrrue" ,r.montant/m.prix "dur" from reservation r join resstatut rs on r.statut = rs.id 
            join modele m on m.id = r.model join points agd on r.agence_depot = agd.id join users u on u.id= r.client join points agr on agr.id = r.agence_recup
            where year(r.createdAt) = year(curdate())');
            return view('layouts.admin.components.reservations.reservations', ['res'=>$res]);
        } else
            return view('auth.register');
    }
    public function updatereservation(Request $validated)
    {
        if (Auth::check()) {
            $st = 3;
            $id = $validated->input('idd');
            $voiture = $validated->input('voiture');
            $user = auth()->user();
            DB::table('reservation')
                ->where('id', $id)
                ->update(['statut' => $st,'voiture'=>$voiture]);
            return redirect('/Administrateur/reservation')->with('success', "Account successfully registered.");
        } else
            return view('auth.register');
    }
    public function reservationdetail($id)
    {//done
        if (Auth::check()) {
            $res = DB::select('select  r.*, rs.nom "statut",u.name "name", m.nom "mod",agd.quartier "agdquar",agd.rue "agdrue", agr.quartier "agrquar", agr.rue "agrrue" ,r.montant/m.prix "dur" from reservation r join resstatut rs on r.statut = rs.id 
            join modele m on m.id = r.model join points agd on r.agence_depot = agd.id join users u on u.id= r.client join points agr on agr.id = r.agence_recup
            where year(r.createdAt) = year(curdate()) and r.id='.$id);
            $voi = DB::select('select * from voiture');
            //$res = DB::select('select r.*,  from reservation r join user u on u.id= r.client where r.id='.$id);
            return view('layouts.admin.components.reservations.reservationdetail', ['res'=>$res, 'voi'=>$voi]);
        } else
            return view('auth.register');
    }

    public function profile()
    {
        if (Auth::check()) {
            $user = auth()->user();
            $user = DB::select('select * from users where id='.$user->id);
            return view('layouts.admin.components.profile');
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
            $requetes = DB::select('select c.*, cl.name "client" from contact c join users cl on c.client =cl.id join admessage rep on rep.question != c.id');
            return view('layouts.admin.components.message.message',['req'=>$requetes]);
        } else
            return view('auth.register');
    }
    public function messagedetail($id)
    {
        if (Auth::check()) {
            $user = auth()->user();
            $requetes = DB::select('select *, cl.name "client" from contact c join users cl on c.client =cl.id where c.id='.$id);
            return view('layouts.admin.components.message.messagedetail',['req'=>$requetes]);
        } else
            return view('auth.register');
    }
    public function agence()
    {
        if (Auth::check()) {
            $user = auth()->user();
            $cty = DB::select('select * from cities');
            return view('layouts.admin.components.agenceadd',['cities'=>$cty]);
        } else
            return view('auth.register');
    }
    public function smessage(Request $validated)
    {
            $user = auth()->user();
            $query = DB::table('admessage')->insert([
                'message' => $validated->input('response'),
                'question' => $validated->input('id'),
                'administrateur' => $user->id
            ]);
            return 'OK';
    }

    public function savresponse(Request $validated)
    {
            $query = DB::table('admessage')->insert([
                'message' => $validated->input('response'),
                'question' => $validated->input('id')
            ]);
            return 'OK';
    }

    public function saveagence(Request $validated)
    {
            $query = DB::table('points')->insert([
                'rue' => $validated->input('rue'),
                'city' => $validated->input('city'),
                'quartier' => $validated->input('quartier')
            ]);
            return redirect('/Administrateur/dashboard')->with('success', "Account successfully registered.");
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
        return redirect('/Administrateur/message')->with('success', "Account successfully registered.");
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
            $complet = DB::select('select COUNT(id) "num" from reservation where statut =3');
            $incomplet = DB::select('select COUNT(id) "num" from reservation where  statut =1');
            $reservations = DB::select('select  r.*, rs.nom "statut", m.nom "mod",agd.quartier "agdquar",agd.rue "agdrue", agr.quartier "agrquar", agr.rue "agrrue" ,r.montant/m.prix "dur" from reservation r join resstatut rs on r.statut = rs.id 
            join modele m on m.id = r.model join points agd on r.agence_depot = agd.id join points agr on agr.id = r.agence_recup
            where year(r.createdAt) = year(curdate()) ');
            $model = DB::select('select m.*, t.nom "trans" from modele m join transmission t on m.transmission = t.id limit 10');
            $contact = DB::select('select c.message "question", rep.message "reponse" from contact c join reponse rep on rep.question = c.id ');
            return view('layouts.admin.components.dashboard',['complet'=>$complet, 'incomplet'=>$incomplet, 'reservations'=> $reservations, 'modeles'=>$model, 'contact'=>$contact]);
        } else
            return view('auth.register');
    }
    public function saveprofile(Request $validated)
    {
        $user = auth()->user();
        DB::table('users')
            ->where('id', $user->id)
            ->update(['name' => $validated->input('name'), 'about' => $validated->input('about'),
                'company' => $validated->input('company'), 'job' => $validated->input('job'),
                'city' => $validated->input('city'), 'phone' => $validated->input('phone')
        ]);
        return redirect('/Administrateur/profile')->with('success', "Account successfully registered.");
       // return redirect('/Client/profile')->with('success', "Account successfully registered.");
    }
}
