<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\Article;
use Validator;
use Image;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {

        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $articles = Article::getLast();
        $user = Auth::user();
        return view('welcome', ['articles' => $articles, 'user' => $user]);
    }

    public function create() {
        $user = Auth::user();

        return view('create', ['user' => $user]);
    }

    public function addNews(Request $request) {
        $rules = [
            'title' => 'required|min:10|max:50',
            'desc' => 'required|min:200',
            'img' => 'mimes:jpeg,bmp,png',
        ];
        $checker = Validator::make($request->all(), $rules);

        if ($checker->fails()) {
            return redirect('/')->withErrors($checker);
        }

        $file = $request->file('img');
        $path = $file->getPathName();
        $img = Image::make($path);
        $imgname = time() . mt_rand(10, 10000);

        //Full image size
        $img->fit(1250, 800);
        $pathuser = public_path("img/news/1250/$imgname.png");
        $img->save($pathuser, 90);

        //Small image 
        $img->fit(256);
        $pathuser = public_path("img/news/256/$imgname.png");
        $img->save($pathuser, 90);


        $article = Article::create([
                    'title' => $request->get('title'),
                    'text' => $request->get('desc'),
                    'img' => $imgname,
                    'uid' => Auth::user()->id,
        ]);
        $article->save();
    }

}
