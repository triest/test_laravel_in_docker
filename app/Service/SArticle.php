<?php

    namespace App\Service;

    use App\ArticleView;
    use App\Http\Controllers\CArticle;
    use App\MArticle;
    use Illuminate\Database\Eloquent\Collection;
    use Illuminate\Http\Request;
    use Illuminate\Support\Str;

    /**
     * Created by PhpStorm.
     * User: triest
     * Date: 10.08.2020
     * Time: 20:54
     */
    class SArticle
    {

        public function gatAll()
        {
            return MArticle::select(['*'])->paginate(5);
        }

        public function show(string $slug)
        {
            $post = MArticle::whereSlug($slug)->firstOrFail();

            $view=new ArticleView();
            $post->view()->save($view);
            return $post;
        }
    }