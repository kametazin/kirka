<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function submit(Request $req) {
        $user = new User();
        $user->name = $req->input('name');
        $user->email = $req->input('email');
        $user->password = $req->input('password');

        $user->save();

        //return redirect()->route('home');
        //если заполнение не работает сбросить кэш: php artisan config:cache
    }
}
