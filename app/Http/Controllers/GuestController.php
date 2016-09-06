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

    public function verify($id, $code) {
//        $user = User::where([['id', '=', $id], ['confCode', '=', $code]]);
//        if ($user->count()) {
//            $user = $user->first();
//            $user->save();
//            Auth::login($user, true);
//            return redirect('/')->withErrors(['Account approved.']);
//        } else {
//            return redirect('/')->withErrors(['Confirmation code not exist.']);
//        }
    }

}
