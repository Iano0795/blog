<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{

    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function gridSystem(){
        return view('gridSystem');
    }
    public function blog(){
        return view('blog');
    }
    public function index(){
        return view('index');
    }
    public function base(){
        return view('base');
    }
}
