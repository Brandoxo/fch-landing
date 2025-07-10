<?php

namespace App\Http\Controllers\front;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class FrontController extends Controller
{
    public function index()
    {
        return view("front.index.index");
    }

        public function desingArt()
    {
        return view("front.desing-art.desing-and-art");
    }

    public function resAranas()
    {
        return view("front.restaurants.resAranas");
    }

    public function resGranada()
    {
        return view('front.restaurants.resGranada');
    }
}

