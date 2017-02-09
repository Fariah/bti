<?php

namespace App\Http\Controllers;


use App\StaticPages;

class FrontController extends Controller
{
    public function home()
    {
        $title = 'Главная';
        $description = 'Описание страницы';
        $rawData = StaticPages::where('type', StaticPages::TYPE_HOME)->get();
        $data = [];
        foreach ($rawData as $item) {
            $data[$item->code] = $item->content;
        }

        return view('pages.home')->with(['title' => $title, 'description' => $description, 'data' => $data]);
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