<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dailyreport_completeController extends Controller
{
    public function dailyreport_complete() 
    {
        //ビューの動作確認用サンプルデータ作成
        $tagu = '日報登録完了';
        $css = 'dailyreport.css';
        $js = 'common.js';

        //ビューを呼び出す
        return view('dailyreport_complete', compact('tagu', 'css', 'js'));
    }
}
