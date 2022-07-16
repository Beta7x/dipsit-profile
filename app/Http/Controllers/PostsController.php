<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function posts() {
        return view('news', [
            "posts" => Posts::all(),
        ]);
    }

    public function post($slug) {
        return view('post', [
            "post" => Posts::find($slug),
        ]);
    }
}
