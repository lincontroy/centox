<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function products()
    {
        return view('pages.products');
    }

    public function training()
    {
        return view('pages.training');
    }

    public function media()
    {
        return view('pages.media');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}