<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    /**
     * Display login page.
     * 
     * @return Renderable
     */
    public function show()
    {
        return view('auth.register');
    }
    public function adshow()
    {
        return view('layouts.admin.components.login');
    }

    /**
     * Handle account login request
     * 
     * @param LoginRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function login(LoginRequest $request)
    {
        $credentials = $request->getCredentials();

        if(!Auth::validate($credentials)):
            return redirect()->to('register')
                ->withErrors(trans('auth.failed'));
        endif;

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);
            
        return $this->authenticated($request, $user);
    }

    /*public function adminlogin(LoginRequest $request)
    {
        $adm = DB::select('select * from administrateur where email= "'.$request->input('email'). '" and password ="'.bcrypt($request->input('password')).'"');
        $credentials = $request->admingetCredentials();
        
        if(count($adm) <1){
            return redirect()->to('login.adshow')
                ->withErrors(trans('auth.failed'));
        }

        //$user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($adm[0]);

        return $this->adminauthenticated($request, $adm[0]);
    }*/
    public function adminLogin(Request $request)
    {
        // dd(Hash::make('password'));
        $regles = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($regles))
        {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        else
        {
            return redirect('/Administrateur/Dashboard')->with('success', "Account successfully registered.");
        }
        return back()->withErrors([
            'email'=>'Mot de passe ou email non reconnue'
        ]);
    }

    /**
     * Handle response after user authenticated
     * 
     * @param Request $request
     * @param Auth $user
     * 
     * @return \Illuminate\Http\Response
     */
    protected function authenticated(Request $request, $user) 
    {
        if(auth()->user()->isadmin ==1){
            return redirect('/Administrateur/dashboard')->with('success', "Account successfully registered.");
        }
        else{
        return redirect('/Client/dashboard')->with('success', "Account successfully registered.");}
       
    }

}
