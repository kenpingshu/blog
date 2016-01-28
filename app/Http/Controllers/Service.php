<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Service extends Controller
{
    public function show(Request $request)
    {
        return view('service._service');
    }
}
