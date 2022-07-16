<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResgisterController extends Controller
{
    public function store() {
        return request()->all();
    }
}
