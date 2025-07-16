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

    public function resAnanas()
    {
        return view("front.restaurants.resAnanas");
    }

    public function resGranada()
    {
        return view('front.restaurants.resGranada');
    }

    public function contact()
    {
        return view('front.contact.contact');
    }
}

