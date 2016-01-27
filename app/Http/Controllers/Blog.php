<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Article;

class Blog extends Controller
{

    public function showArticle(Request $request, $id)
    {
//        echo $id;
        return view('blog._blog');
    }
    

}
