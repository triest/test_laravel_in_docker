<?php

    namespace App;

    use Cviebrock\EloquentSluggable\Sluggable;
    use Illuminate\Database\Eloquent\Model;
    use Rennokki\QueryCache\Traits\QueryCacheable;

    class MArticle extends Model
    {
        //
        use Sluggable;

        use QueryCacheable;

        protected $table = 'articles';

        /**
         * Return the sluggable configuration array for this model.
         *
         * @return array
         */
        public function sluggable()
        {
            return [
                    'slug' => [
                            'source' => 'title'
                    ]
            ];
        }

        public function view()
        {
            return $this->hasMany(ArticleView::class);
        }
    }
