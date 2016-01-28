<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Article;
use Illuminate\Support\Facades\Route;

class Blog extends Controller
{
    
    public function showArticle(Request $request, $id)
    {
        $article= (new Article())->geSingletArticle($id);
        return view('blog._blog', ["article"=>$article]);
    }

}
