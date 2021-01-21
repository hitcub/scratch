<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DailyreportController extends Controller
{
    public function dailyreport() 
    {
        //ビューの動作確認用サンプルデータ作成
        $title = '日報登録';
        $err_msgs = ['エラー１', 'エラー２', 'エラー３'];
        $css = 'dailyreport.css';
        $js = 'common.js';

        //ビューを呼び出す
        return view('dailyreport', compact('title', 'err_msgs', 'css', 'js'));
    }
}