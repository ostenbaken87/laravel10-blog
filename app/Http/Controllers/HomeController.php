<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $articles = DB::table('articles')->get()->take(6);
        return view('front.index',compact('articles'));
    }
}
