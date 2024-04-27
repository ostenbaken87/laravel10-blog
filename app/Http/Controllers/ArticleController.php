<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = DB::table('articles')->get();
        return view('front.articles.index',compact('articles'));
    }

    public function show($id)
    {
        $article = Article::where('id', $id)->firstOrFail();
        $articles = DB::table('articles')->get()->take(4);
        return view('front.articles.show',compact('article','articles'));
    }
}
