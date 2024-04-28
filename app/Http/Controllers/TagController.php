<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function show($id)
    {
        $tag = Tag::where('id', $id)->firstOrFail();
        $articles = $tag->article()->orderBy('id', 'desc')->get();
        return view('front.tags.show', compact('tag', 'articles'));
    }
}
