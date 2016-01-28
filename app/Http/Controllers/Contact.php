<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Contact extends Controller
{
    public function show(Request $request)
    {
        return view('contact._contact');
    }
}
