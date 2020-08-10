<?php

    namespace App\Http\Controllers;

    use App\Service\SArticle;
    use Illuminate\Http\Request;


    class CArticle extends Controller
    {
        //
        public function index(Request $request, SArticle $SArticle)
        {

            $articles = $SArticle->gatAll();
            return view('articles.index')->with(['articles' => $articles]);
        }

        public function view($slug, SArticle $SArticle)
        {
            $article = $SArticle->show($slug);
            return view('articles.view')->with(['article' => $article]);
        }
    }
