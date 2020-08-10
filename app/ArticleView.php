<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class ArticleView extends Model
    {
        //
        protected $table = "article_views";

        function article()
        {
            return $this->belongsTo(MArticle::class);
        }
    }
