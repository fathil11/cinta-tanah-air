<?php

namespace App;

use App\Articles as Articles;

use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    protected $table = "article_category";

    public function article(){
        $this->belongsTo('Articles', 'article_id');
    }

}
