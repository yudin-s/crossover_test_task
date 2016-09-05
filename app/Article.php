<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

    protected $table = 'article';
    protected $fillable = [
        'title', 'text', 'img', 'uid'
    ];

    /**
     * Get last articles
     * @param integer $count Count of articles
     */
    public static function getLast($count = 10) {
        return self::orderBy('created_at')->limit($count);
    }

    public function comments() {
        return $this->hasMany('App\Comment', 'lid', 'id')->where('aid', '=', 0);
    }

    public function commentsCount() {
        return $this->hasMany('App\Comment', 'lid', 'id')->count();
    }

    public function user() {
        return $this->hasMany('App\User', 'id', 'uid')->first();
    }

    public function url() {
        return action('HomeController@viewNews', ['id' => $this->id]);
    }

    protected static function boot() {
        parent::boot();

        static::deleting(function($user) {
            $user->comments()->delete();
        });
    }

}
