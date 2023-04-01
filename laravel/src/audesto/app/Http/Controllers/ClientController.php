<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function dashboard()
    {
        return view('layouts.client.dashboard');
    }
    public function register()
    {
        return view('client.register');
    }
    public function welcome()
    {
        return view('client.welcome');
    }
}
