<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\News;
use File;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;

class NewsController extends Controller
{

    public function index()
    {
        $title = 'Новости';
        $description = 'Добавление и редактирование новостей';
        return view('admin/pages/news/news_grid')->with(['title' => $title, 'description' => $description]);
    }

    public function getNewsGrid(Request $request)
    {
        $news = News::all()->toArray();

        return json_encode(['data' => $news]);
    }

    public function getAddNews()
    {
        $title = 'Новости';
        $description = 'Добавить новость';
        return view('admin/pages/news/news_form')->with(['title' => $title, 'description' => $description, 'news' => false]);
    }

    public function postAddNews(Request $request)
    {
        $news = new News();
        $news->title = $request->get('title');
        $news->status = $request->get('status');
        $news->description = $request->get('description');

        $file = $request->file('image');
        $image = new ImageManager();
        $imageName = str_random(10) . '.' . $file->getClientOriginalExtension();
        $path = 'img/news/';
        if(!File::exists($path)) {
            File::makeDirectory($path);
        }
        $image->make($file)->resize(450, null, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        })->save($path . $imageName);

        $news->image = $imageName;

        $news->save();

        return redirect('admin/news');

    }

    public function getEditNews($news)
    {
        $title = 'Новости';
        $description = 'Редактировать новость: ' . $news->title;
        return view('admin/pages/news/news_form')->with(['title' => $title, 'description' => $description, 'news' => $news]);
    }

    public function postEditNews(Request $request, $news)
    {
        $news->title = $request->get('title');
        $news->status = $request->get('status');
        $news->description = $request->get('description');

        if($request->file('image')) {
            $file = $request->file('image');
            $image = new ImageManager();
            $imageName = str_random(10) . '.' . $file->getClientOriginalExtension();
            $path = 'img/news/';
            if(!File::exists($path)) {
                File::makeDirectory($path);
            }

            File::delete($path . $news->image); // delete old image;

            $image->make($file)->resize(450, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->save($path . $imageName);

            $news->image = $imageName;
        }

        $news->save();

        return redirect('admin/news');
    }

    public function getDeleteNews(News $news)
    {
        $path = 'img/news/';
        File::delete($path . $news->image); // delete image;
        $news->delete();
        return redirect('admin/news');
    }
}