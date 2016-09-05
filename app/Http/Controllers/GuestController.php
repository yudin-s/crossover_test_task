<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Article;

class GuestController extends Controller {

    public function index() {
        $articles = Article::getLast();
        return view('welcome', ['articles' => $articles]);
    }

}
