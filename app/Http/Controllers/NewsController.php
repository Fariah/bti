<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function getindex()
    {
        $news = News::all();
        $data = [
            'news' => $news
        ];
        return view('pages.news', $data);
    }
}
