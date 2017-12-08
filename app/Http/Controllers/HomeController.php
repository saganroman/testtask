<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $moderator = User::where('email', 'admin@test.com')->first();
        $loginedUser = Auth::user();
        $isModerator = $loginedUser->email == $moderator->email ? true : false;


        return view('home')->with('users', $users)->with('isModerator', $isModerator);
    }

    public function editUserView($id)
    {
        $user = User::find($id);
        return view('editUser')->with('user', $user);
    }

    public function updateUser(Request $request)
    {
        $data = $request->all();
        Validator::make($data, ['name' => 'required|max:255|min:4', 'email' => 'required|email|max:255'])->validate();
        $user = User::find($data['id']);
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->save();
        return redirect('home');
    }

    public function destroyUser($id)
    {
        User::destroy($id);
        return redirect('home');
    }


}
