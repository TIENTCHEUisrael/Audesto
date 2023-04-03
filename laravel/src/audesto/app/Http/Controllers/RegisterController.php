<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    /**
     * Display register page.
     * 
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('auth.register');
    }

    /**
     * Handle account registration request
     * 
     * @param RegisterRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
   /* public function register(RegisterRequest $request) 
    {
        $user = User::create($request->validated());

        auth()->login($user);

        return redirect('/Client/dashboard')->with('success', "Account successfully registered.");
    }*/
    public function register(Request $validated)
    {
        //$validated = $request->validated();
        $query = DB::table('users')->insert([
            'username' => $validated->input('usernamereg'),
            'email' => $validated->input('emailreg'),
            'password' => bcrypt($validated->input('passwordreg')),
            'name' => $validated->input('namereg')
        ]);
        return redirect('/Client/dashboard')->with('success', "Account successfully registered.");
    }
}
