<?php

namespace App;

use App\Users as Users;
use App\ArticlesCategory as ArticlesCategory;
use App\ArticlesStatistic as ArticlesStatistic;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    protected $table = "articles";

    public function author()
    {
        $this->belongsTo('Users', 'author_id');
    }

    public function statistic()
    {
        $this->hasMany('ArticlesStatistic', 'article_id');
    }

    public function category()
    {
        $this->hasMany('ArticlesCategory', 'article_id');
    }
}
