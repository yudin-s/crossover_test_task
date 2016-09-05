<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

    protected $table = 'article';

    /**
     * Get last articles
     * @param integer $count Count of articles
     */
    public static function getLast($count = 10) {
        return self::orderBy('created_at')->limit($count);
    }

}
