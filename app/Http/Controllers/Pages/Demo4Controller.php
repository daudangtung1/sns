<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Request;
use App\Models\Title;

class Demo4Controller extends Controller
{
    public function index()
    {
        $currentURL = Request::path();
        $title = Title::where('slug', $currentURL)->first();
        return view('pages.demo1', compact('title'));
    }
}
