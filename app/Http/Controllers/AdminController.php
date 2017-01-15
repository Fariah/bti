<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function index()
    {
        $title = 'Админка';
        $description = 'Описание админки';
        return view('admin/index')->with(['title' => $title, 'description' => $description]);
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('github')->user();

        dd($user);
        // $user->token;
    }
}