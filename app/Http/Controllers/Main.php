<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Article;

class Main extends Controller
{

    public function index(Request $request)
    {
        $article= new Article();
        $articles = $article->getArticleList(1);
        return view('main',compact("articles"));
    }
}
