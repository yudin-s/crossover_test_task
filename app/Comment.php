<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {

    protected $table = "comments";

    public function user() {
        return $this->hasOne('App\User', 'id', 'uid');
    }

    public function childs() {
        return $this->hasMany('App\Comment', 'aid', 'id');
    }

    protected static function boot() {
        parent::boot();

        static::deleting(function($user) {
            $user->childs()->delete();
        });
    }

}
