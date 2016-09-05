<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Article;
use App\User;
use Auth;

class GuestController extends Controller {

    public function index() {
        $articles = Article::getLast();
        return view('welcome', ['articles' => $articles]);
    }

    public function verify($id, $code) {
        $user = User::where([['id', '=', $id], ['confCode', '=', $code]]);
        if ($user->count()) {
            $user = $user->first();
            $user->isConfirmed = 1;
            $user->save();
            Auth::login($user, true);
            return redirect('/')->withErrors(['Account approved.']);
        } else {
            return redirect('/')->withErrors(['Confirmation code not exist.']);
        }
    }

}
