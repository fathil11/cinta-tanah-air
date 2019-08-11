<?php

namespace App;

use App\User as User;
use App\ArticleCategory;
use App\ArticleStatistic as ArticleStatistic;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = "articles";

    public function author()
    {
        $this->belongsTo('User', 'author_id');
    }

    public function statistic()
    {
        $this->hasMany('App\ArticleStatistic', 'article_id');
    }

    public function category()
    {
        return $this->hasMany('App\ArticleCategory', 'article_id');
    }

    public function comment()
    {
        $this->hasMany('ArticleComment', 'comment_id');
    }
}
