<?php

namespace App\Http\Controllers;


class FrontController extends Controller
{
    public function home()
    {
        $title = 'Главная';
        $description = 'Описание страницы';
        return view('pages.home')->with(['title' => $title, 'description' => $description]);
    }

    public function about()
    {
        $title = 'О нас';
        $description = 'Описание страницы';
        return view('pages.about')->with(['title' => $title, 'description' => $description]);
    }

    public function contact()
    {
        $title = 'Контакты';
        $description = 'Описание страницы';
        return view('pages.contact')->with(['title' => $title, 'description' => $description]);
    }
}