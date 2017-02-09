<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\News;
use App\StaticPages;
use File;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;

class HomeController extends Controller
{
    public $formtitles = [
        'slogan' => 'Слоган',
        'title' => 'Название',
        'sub_title' => 'Под название',
        'image' => 'Картинка',
        'sub_title_left' => 'Название качества слева',
        'sub_title_center' => 'Название качества по центру',
        'sub_title_right' => 'Название качества справа',
        'sub_description_left' => 'Описание качества слева',
        'sub_description_center' => 'Описание качества по центру',
        'sub_description_right' => 'Описание качества справа',
        'sub_slogan' => 'Слоган внизу',
        'sub_slogan_author' => 'Автор'
    ];

    public function index()
    {
        $title = 'Главная страница';
        $description = 'Редактирование контента на главной';
        $formData = StaticPages::where('type', StaticPages::TYPE_HOME)->get();

        return view('admin/pages/static_pages/index')->with(['title' => $title, 'description' => $description, 'formData' => $formData, 'titles' => $this->formtitles]);
    }

    public function postUpdateHome(Request $request)
    {
        $slogan = StaticPages::where([['type', '=', StaticPages::TYPE_HOME], ['code', '=', 'slogan']])->first();
        $slogan->content = $request->get('slogan');
        $slogan->save();

        $title = StaticPages::where([['type', '=', StaticPages::TYPE_HOME], ['code', '=', 'title']])->first();
        $title->content = $request->get('title');
        $title->save();

        $sub_title = StaticPages::where([['type', '=', StaticPages::TYPE_HOME], ['code', '=', 'sub_title']])->first();
        $sub_title->content = $request->get('sub_title');
        $sub_title->save();

        if($request->file('image')) {
            $image = StaticPages::where([['type', '=', StaticPages::TYPE_HOME], ['code', '=', 'image']])->first();
            $file = $request->file('image');
            $imageManager = new ImageManager();
            $imageName = str_random(10) . '.' . $file->getClientOriginalExtension();
            $path = 'img/static/';
            if(!File::exists($path)) {
                File::makeDirectory($path);
            }

            File::delete($path . $image->content); // delete old image;

            $imageManager->make($file)->resize(450, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->save($path . $imageName);

            $image->content = $imageName;
            $image->save();
        }

        $sub_title_left = StaticPages::where([['type', '=', StaticPages::TYPE_HOME], ['code', '=', 'sub_title_left']])->first();
        $sub_title_left->content = $request->get('sub_title_left');
        $sub_title_left->save();

        $sub_title_center = StaticPages::where([['type', '=', StaticPages::TYPE_HOME], ['code', '=', 'sub_title_center']])->first();
        $sub_title_center->content = $request->get('sub_title_center');
        $sub_title_center->save();

        $sub_title_right = StaticPages::where([['type', '=', StaticPages::TYPE_HOME], ['code', '=', 'sub_title_right']])->first();
        $sub_title_right->content = $request->get('sub_title_right');
        $sub_title_right->save();

        $sub_description_left = StaticPages::where([['type', '=', StaticPages::TYPE_HOME], ['code', '=', 'sub_description_left']])->first();
        $sub_description_left->content = $request->get('sub_description_left');
        $sub_description_left->save();

        $sub_description_center = StaticPages::where([['type', '=', StaticPages::TYPE_HOME], ['code', '=', 'sub_description_center']])->first();
        $sub_description_center->content = $request->get('sub_description_center');
        $sub_description_center->save();

        $sub_description_right = StaticPages::where([['type', '=', StaticPages::TYPE_HOME], ['code', '=', 'sub_description_right']])->first();
        $sub_description_right->content = $request->get('sub_description_right');
        $sub_description_right->save();

        $sub_slogan = StaticPages::where([['type', '=', StaticPages::TYPE_HOME], ['code', '=', 'sub_slogan']])->first();
        $sub_slogan->content = $request->get('sub_slogan');
        $sub_slogan->save();

        $sub_slogan_author = StaticPages::where([['type', '=', StaticPages::TYPE_HOME], ['code', '=', 'sub_slogan_author']])->first();
        $sub_slogan_author->content = $request->get('sub_slogan_author');
        $sub_slogan_author->save();

        return redirect('admin/home');
    }
}