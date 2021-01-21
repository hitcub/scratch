<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dailyreport_confirmController extends Controller
{
    public function dailyreport_confirm() 
    {
        //ビューの動作確認用サンプルデータ作成
        $tagu = '日報登録確認';
        $title = '日報登録確認';
        $err_msgs1 = 'エラー１-１';
        $err_msgs2 = 'エラー２-１';
        $err_msgs3 = 'エラー３-１';
        $err_msgs4 = 'エラー４-１';
        $err_msgs5 = 'エラー５-１';
        $css = 'dailyreport_confirm.css';
        $js = 'common.js';

        //ビューを呼び出す
        return view('dailyreport_confirm', compact('tagu', 'title', 'err_msgs1', 'err_msgs2', 'err_msgs3', 'err_msgs4', 'err_msgs5', 'css', 'js'));
    }
}
