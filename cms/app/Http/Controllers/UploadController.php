<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function Upload()
    {    
        return view('upload/index');
    }
}
