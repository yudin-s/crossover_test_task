<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class UsersCode extends Model {

    const USER_SESSION_KEY = "preRegUser";

    protected $table = "users_codes";
    protected $fillable = [
        'email', 'code'
    ];

    protected static function boot() {
        parent::boot();

        static::saving(function($obj) {
            Session::put(self::USER_SESSION_KEY, $obj);
        });
        static::created(function($obj) {
            Session::put(self::USER_SESSION_KEY, $obj);
        });
        static::deleted(function($obj) {
            Session::forget(self::USER_SESSION_KEY);
        });
    }

}
