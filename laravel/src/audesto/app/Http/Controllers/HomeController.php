<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() 
    {        $modeles = DB::select('select * from modele');
        return view('home.welcome',['models'=>$modeles]);

        //return view('home.welcome');
    }
}
