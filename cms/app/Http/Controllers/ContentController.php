<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function Content()
    {    
        return view('content/index');
    }
}