<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TweetsController extends Controller
{
//投稿一覧を表示する

    public function showlist()
    {
        
        return view('tweets.list');
    }
}
