<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home_infosysController extends Controller
{
    public function home_infosys () 
    {
        //ビューの動作確認用サンプルデータ作成
        $title = 'ホーム';
        $err_msgs = ['エラー１', 'エラー２', 'エラー３'];
        $css = 'home.css';
        $js = 'common.js';

        //ビューを呼び出す
        return view('home_infosys', compact('title', 'err_msgs', 'css', 'js'));
    }
}
