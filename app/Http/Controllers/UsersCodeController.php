<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use App\UsersCode;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class UsersCodeController extends Controller {

    public function register($email, $code) {
        $record = UsersCode::where([['email', '=', $email], ['code', '=', $code]]);
        if ($record->count()) {
            return view('auth.register', ['email' => $email]);
        } else {
            return redirect('/')->withErrors(['Verification code expired']);
        }
    }

    public function resendLink(Request $request) {
        $obj = Session::get(UsersCode::USER_SESSION_KEY);
        Input::merge(['email' => $obj->email]);

        Mail::send('email.verify', [
            'confirmation' => $obj->code,
            'email' => Input::get('email')], function($message) {
            $message->to(Input::get('email'), Input::get('email'))
                    ->subject('Verify your email address');
        });
        return redirect('/')->withErrors(['Message send.']);
    }

    public function sendLink(Request $request) {
        $rules = ['invite' => 'required|unique:users,email|max:255'];
        $valid = Validator::make($request->all(), $rules);
        if ($valid->fails()) {
            return redirect('/login')->withErrors($valid);
        }
        $code = mt_rand(10, 100000);
        $email = $request->get('invite');


        $obj = UsersCode::create(['email' => $email, 'code' => $code]);
        Mail::send('email.verify', [
            'confirmation' => $code,
            'email' => Input::get('invite')], function($message) {
            $message->to(Input::get('invite'), Input::get('invite'))
                    ->subject('Verify your email address');
        });
        return redirect('/');
    }

}
