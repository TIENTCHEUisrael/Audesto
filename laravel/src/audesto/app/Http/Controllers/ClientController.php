<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{

    public function profile()
    {
        if (Auth::check()) {
            return view('layouts.client.profile');
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
        return redirect('/Client/profile')->with('success', "Account successfully registered.");
       // return redirect('/Client/profile')->with('success', "Account successfully registered.");
    }
    public function savepassword(Request $validated)
    {
        $user = auth()->user();
        DB::table('users')
            ->where('id', $user->id)
            ->update(['name' => $validated->input('name'), 'about' => $validated->input('about'),
                'company' => $validated->input('company'), 'job' => $validated->input('job'),
                'city' => $validated->input('city'), 'phone' => $validated->input('phone')
        ]);
        return redirect('/Client/profile')->with('success', "Account successfully registered.");
    }
    public function contact()
    {
        if (Auth::check()) {
            return view('layouts.client.contact');
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
            return view('layouts.client.dashboard',['complet'=>$complet, 'incomplet'=>$incomplet, 'reservations'=> $reservations, 'modeles'=>$model, 'contact'=>$contact]);
        } else
            return view('auth.register');
    }

    public function reservation()
    {
        if (Auth::check()) {
            $cities = DB::select('select DISTINCT c.name, c.id from points p join cities c on p.city = c.id');
            $points = DB::select('select p.* , c.name "cit" from points p join cities c on p.city = c.id');
            $model = DB::select('select m.*, t.nom "trans" from modele m join transmission t on m.transmission = t.id');
            return view('layouts.client.reservation',['cities'=>$cities, 'points'=>$points, 'modeles'=> $model]);
        } else
            return view('auth.register');
    }
    public function dateDiff($date1, $date2)
    {
        $date1_ts = strtotime($date1);
        $date2_ts = strtotime($date2);
        $diff = $date2_ts - $date1_ts;
        return round($diff / 86400);
    }
    public function savereservation(Request $validated)
    {
        $pu = DB::select('select prix from modele where id=' . $validated->input('model'));
        $days = $this->dateDiff($validated->input('date_recup'), $validated->input('date_depot'));
        $montant = ($days * $pu[0]->prix);
        $user = auth()->user();
        $query = DB::table('reservation')->insert([
            'date_recup' => $validated->input('date_recup'),
            'date_depot' => $validated->input('date_depot'),
            'agence_recup' => $validated->input('agence_recup'),
            'agence_depot' => $validated->input('agence_depot'),
            'model' => $validated->input('model'),
            'montant' => $montant,
            'client' => $user->id
        ]);
        return redirect('/Client/reservation')->with('success', "Reservation succesfully made.");
    }
    public function garage()
    {
        if (Auth::check()) {
            return view('layouts.client.garage');
        } else
            return view('auth.register');
    }
}
