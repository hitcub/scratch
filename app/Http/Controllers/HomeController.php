<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home () 
    {
        //ビューの動作確認用サンプルデータ作成
        $title = 'ホーム';
        $err_msgs = ['エラー１', 'エラー２', 'エラー３'];
        $css = 'home.css';
        $js = 'common.js';

        //ビューを呼び出す
        return view('home', compact('title', 'err_msgs', 'css', 'js'));
    }
}
