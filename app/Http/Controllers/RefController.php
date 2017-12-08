<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth\RegisterController;
//use Illuminate\Auth;
use Illuminate\Support\Facades\Auth;

class RefController extends Controller
{
    public function referalOwner(Request $request)
    {
        if (Auth::check()) {
            Auth::logout();
        }
        $data = $request->all();
        $referal_id = $data['friend_id'];
        $request->session()->put('referalOwner', $referal_id);
//        return redirect(url('register'));
        return view('auth.register')->withId($referal_id);
    }
}
