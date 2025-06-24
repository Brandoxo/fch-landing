<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class frontController extends Controller{
    public function index()
    {
        return view("/");
    }
}