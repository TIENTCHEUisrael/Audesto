<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    public function updatestatut(Request $validated)
    {
        $user = auth()->user();
        DB::table('users')
            ->where('id', $user->id)
            ->update([
                'name' => $validated->input('name'), 'about' => $validated->input('about'),
                'company' => $validated->input('company'), 'job' => $validated->input('job'),
                'city' => $validated->input('city'), 'phone' => $validated->input('phone')
            ]);
        return "OK";
    }
    public function contact()
    {
        if (Auth::check()) {
            return view('layouts.client.contact');
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
        $montant = ($this->dateDiff($validated->input('date_recup'), $validated->input('date_depot')) * $pu[0]->prix);
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
        return view('client.reservation');
    }


}
