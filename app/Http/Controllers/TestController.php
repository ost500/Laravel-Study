<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $articles = Article::all();
//        dd($articles);
        return view('test', compact('articles'));
    }
}
