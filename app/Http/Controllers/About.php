<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class About extends Controller
{
    public function show(Request $request)
    {
        return view('about._about');
    }
}
