<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class FrontpageController extends Controller
{
    public function index() {

        $articles = Article::all();

        return view ('frontpages.index', compact('articles'));
    }

    public function show($slug) {
        $article = Article::where('slug', $slug)->first();


        return view ('frontpages.show', compact('article'));
    }
}
