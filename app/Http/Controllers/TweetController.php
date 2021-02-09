<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet;
    // Tweetモデルにアクセス → モデルはテーブルとやりとりするところ → Tweetsテーブルを使える準備

class TweetController extends Controller
{
    //
    public function index()
    {
        $tweet = Tweet::find(1);
        // find() → select from Tweets where id=1
        // dd($tweet);
        // Laravelのデバック関数
        // Tweetsテーブルのid=1を取得せよ
        return view('tweets.index');
    }
}
