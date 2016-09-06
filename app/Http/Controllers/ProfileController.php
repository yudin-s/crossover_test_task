<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Image;
use Validator;
use App\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Services\RssFeed;

class ProfileController extends Controller {

    public function view($id) {

        try {
            $user = User::findOrFail((int) $id);
            return view('profile', ['user' => $user, 'title' => 'Author | ' . $user->name]);
        } catch (ModelNotFoundException $e) {
            return back()->withErrors(['msg', 'Profile not found.']);
        }
    }

    public function postAvatar(Request $request) {
        $file = $request->file('img');
        $path = $file->getPathName();

        $user = Auth::user();
        $id = $user->id . mt_rand(1, 100);
        $img = Image::make($path);

        $sizes = array(256, 64);

        foreach ($sizes as $size) {
            $img->fit($size);

            $pathuser = public_path("img/avatars/$size/$id.png");
            $img->save($pathuser, 90);
        }

        $user->avatar = $id;
        $user->save();

        return redirect('/');
    }

    public function postPassword(Request $request) {
        $user = Auth::user();
        $rules = [
            'password' => 'required|same:password2|min:6',
        ];
        $messages = [
            'password.same' => 'The new password and re-type new password must match.',
            'password.required' => 'New password cannot be empty',
        ];
        $valid = Validator::make($request->all(), $rules, $messages);

        if ($valid->fails()) {
            return redirect('/')->withErrors($valid);
        }

        $user->password = bcrypt($request->get('password'));
        $user->save();
        return redirect('/')->withError(['Password has been saved.']);
    }

    public function postEmail(Request $request) {
        $user = Auth::user();

        $rules = [
            'email' => 'required|email'
        ];
        $valid = Validator::make($request->all(), $rules);
        if ($valid->fails()) {
            return redirect('/')->withErrors($valid);
        }

        $user->email = $request->get('email');
        $user->save();
        return redirect('/')->withError(['Password has been saved.']);
    }

    public function rss($id) {
        try {
            $user = User::findOrFail((int) $id);
            $feed = new RssFeed();
            return response($feed->getRSS('user-' . $id, $user->news))
                            ->header('Content-type', 'application/rss+xml');
        } catch (ModelNotFoundException $e) {
            return response("")
                            ->header('Content-type', 'application/rss+xml');
        }
    }

}
