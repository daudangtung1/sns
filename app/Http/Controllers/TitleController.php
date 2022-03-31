<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Title;

class TitleController extends Controller
{
    public function index()
    {
        // $currentURL = Request::path();
        // $title = Title::where('slug', $currentURL)->first();
        // dd($title->title);
        $pages = Title::all();
        return view('title.index', compact('pages'));
    }

    public function edit($id)
    {
        $page = Title::findOrFail($id);
        return view('title.edit', compact('page'));
    }

    public function update(Request $request, $id)
    {
        $page = Title::findOrFail($id);
        $page->title = $request->title;
        $page->save();
        return redirect()->route('title.index')->with('success', 'Success');
    }
}
