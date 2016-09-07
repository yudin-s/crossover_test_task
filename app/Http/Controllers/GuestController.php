<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Article;
use App\User;
use Auth;
use App\UsersCode;
use Illuminate\Support\Facades\Session;

class GuestController extends Controller {

    public function index() {
        $articles = Article::getLast();

        $sendLink = Session::get(UsersCode::USER_SESSION_KEY);
        return view('welcome', ['articles' => $articles, 'userCode' => $sendLink]);
    }

}
