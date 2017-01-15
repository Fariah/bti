<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function getRedirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function getHandleProviderCallback()
    {
        $user = Socialite::driver('github')->user();

        dd($user);
        // $user->token;
    }

    public function postLogin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // Authentication passed...
            return redirect()->intended('/');
        }
    }

    public function getLogout()
    {
        Auth::logout();

        return redirect('/');
    }

    public function getRegister()
    {
        return view('pages.register');
    }

    public function postRegister(Request $request)
    {

        $validator = Validator::make($request->all(), User::rules(), User::messages());

        if ($validator->passes())
        {

            $data = [
                'email' => $request->email,
                'name' => $request->name,
                'password' => bcrypt($request->password)
            ];


            $user = User::create($data);

            $user->attachUserRole(User::USER_ROLE);


//            try {
//                $emailData = ['login' => $user->email, 'password' => $request['password']];
//
//                Mail::send('emails.register', array('data' => $emailData), function($message) use ($user)
//                {
//                    $message->to($user->email, $user->first_name . ' ' . $user->last_name)->from(env('MAIL_USERNAME', true), env('MAIL_APP', true))->subject('Registration');
//                });
//            } catch (\Exception $e) {
//                Log::error(__FILE__.'|'.__LINE__.'|'.'email was not sent');
//            }

            return redirect()->intended('/');
        } else {
            return view('pages.register')->withErrors($validator->messages());
        }
    }
}