<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dailyreport_confirm_superiorController extends Controller
{
    public function dailyreport_confirm_superior() 
    {
        //ビューの動作確認用サンプルデータ作成
        $tagu = '日報承認';
        $title = '日報承認';
        $err_msgs1 = 'エラー１-１';
        $err_msgs2 = 'エラー２-１';
        $err_msgs3 = 'エラー３-１';
        $err_msgs4 = 'エラー４-１';
        $err_msgs5 = 'エラー５-１';
        $css = 'dailyreport_confirm.css';
        $js = 'common.js';

        //ビューを呼び出す
        return view('dailyreport_confirm_superior', compact('tagu', 'title', 'err_msgs1', 'err_msgs2', 'err_msgs3', 'err_msgs4', 'err_msgs5', 'css', 'js'));
    }
}
