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
}
