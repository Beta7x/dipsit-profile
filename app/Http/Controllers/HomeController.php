<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('home');
    }

    public function about() {
        return view('about');
    }

    public function news() {
        return view('news', [
            "posts" => Posts::all(),
        ]);
    }

    public function posts($slug) {
        return view('post', [
            "post" => Posts::find($slug),
        ]);
    }

    public function contact() {
        return view('contact');
    }

    public function achievements() {
        return view('achievements');
    }
}
