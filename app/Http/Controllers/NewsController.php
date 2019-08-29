<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
    public function newsList()
    {
        $news = News::orderBy('id', 'desc')->get();
        return view('news.list-admin', ['news' => $news]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('news.add');
    }
}
