<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    
    public function profile()
    {
        return view('layouts.client.profile');
    }
    public function saveprofile()
    {
        return view('layouts.client.profile');
    }
    public function contact()
    {
        return view('layouts.client.contact');
    }
    public function savecontact()
    {
        return view('layouts.client.reservation');
    }
    public function faq()
    {
        return view('layouts.client.faq');
    }

    public function dashboard()
    {
        return view('layouts.client.dashboard');
    }
    public function reservation()
    {
        return view('layouts.client.reservation');
    }
    public function savereservation()
    {
        return view('layouts.client.reservation');
    }
    public function garage()
    {
        return view('layouts.client.garage');
    }


}
