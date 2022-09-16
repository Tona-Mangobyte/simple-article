<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function __construct()
    {
        // function body
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index() {
        $news = News::all(['id', 'title', 'content'])->take(50);
        return view('news', [
            'news' => $news
        ]);
    }
}
