<?php

namespace App;

use App\Articles as Articles;
use Illuminate\Database\Eloquent\Model;

class ArticlesStatistic extends Model
{
    protected $table = "articles_statistic";

    public function article(){
        $this->belongsTo('Articles', 'article_id');
    }
}
