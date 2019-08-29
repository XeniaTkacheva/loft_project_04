<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('id', 'desc')->get();
        return view('news.list', ['news' => $news]);
    }

    public function show(int $newsId)
    {
        $newsSingle = News::query()->find($newsId);
        return view('news.single-news', ['newsSingle' => $newsSingle]);
    }
}
