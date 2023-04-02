<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;
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
    public function saveprofile()
    {
        return view('layouts.client.profile');
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
        if (Auth::check()) {
            return view('layouts.client.dashboard');
        } else
            return view('auth.register');
    }
    public function reservation()
    {
        if (Auth::check()) {
            return view('layouts.client.reservation');
        } else
            return view('auth.register');
    }
    public function savereservation()
    {
        return view('layouts.client.reservation');
    }
    public function garage()
    {
        if (Auth::check()) {
            return view('layouts.client.garage');
        } else
            return view('auth.register');
    }
}
