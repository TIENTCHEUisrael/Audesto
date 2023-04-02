<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{

    public function show()
    {
        if (Auth::check()) {
            return redirect('/Client/profile')->with('OK');
        } else
            return redirect('/')->with('OK');;
    }
    public function uppassword(Request $validated)
    {
        $user = auth()->user();
        if (Hash::check($validated->input('password'), $user->password)) {
            if ($validated->input('newpassword') == $validated->input('renewpassword')) {
                DB::table('users')
                    ->where('id', $user->id)
                    ->update([
                        'password' => bcrypt($validated->input('newpassword'))
                    ]);
                return 'OK';
            }
            return 'Le nouveau mot de passe ne correspond pas au mot de passe verifier';
        }
        return 'Le mot de passe entree n\'est pas le mot de passe courant';
        // return redirect('/Client/profile')->with('success', "Account successfully registered.");
    }
}
