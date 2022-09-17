<?php

namespace App\Http\Controllers;

use App\Events\AuthenticationSuccess;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
        $user = "Simple user authenticated";
        $newsOne = News::all( ['id', 'title'])->where('id', 1);
        Log::info($newsOne);
        AuthenticationSuccess::dispatch($newsOne);
        $news = News::all(['id', 'title', 'content'])->take(50);
        return view('news', [
            'news' => $news
        ]);
    }
}
