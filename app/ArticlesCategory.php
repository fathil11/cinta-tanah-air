<?php

namespace App;

use App\Articles as Articles;
use Illuminate\Database\Eloquent\Model;

class ArticlesCategory extends Model
{
    protected $table = "articles_category";

    public function article(){
        $this->belongsTo('Articles', 'article_id');
    }

}
