<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
//use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function facebook()
    {
        return Socialite::driver('facebook')->redirect();
        // return Socialite::with('facebook') ->fields(['first_name', 'last_name', 'email', 'gender', 'birthday'])->redirect();
    }

    /**
     * Obtain the user information
     *
     * @return Response
     */
    public function handleProviderCallback(Request $request)
    {
        $friend_id = !empty(session('referalOwner')) ? session('referalOwner') * 1 : 0;
        $userSocial = Socialite::driver('facebook')->stateless()->user();
        //$userSocial =  Socialite::with('facebook')->user();

        //   dd(Socialite::driver('facebook')->stateless()->user());
        $findUser = User::where('email', $userSocial->email)->first();
        if ($findUser) {
            Auth::login($findUser);
            return redirect('/');

        } else {
            $user = new User;
            $user->name = $userSocial->name;
            if (!empty($userSocial->email)) {
                $user->email = $userSocial->email;
            }
            else{
                $request->session()->flash('emailError', 'This user does not have an email!!');
                return redirect('/register');}
            // $user->friend_id = $request->session()->put('referalOwner', $referal_id);
            $user->friend_id = $friend_id;
            $user->password = '';
            $user->save();

            Auth::login($user);

            return redirect('/');
        }

    }
}
