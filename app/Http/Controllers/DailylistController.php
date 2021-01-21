<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DailylistController extends Controller
{
    public function dailylist() 
    {
        //ビューの動作確認用サンプルデータ作成
        $tagu = '日報';
        $title1 = '日報登録';
        $title2 = '日報一覧';
        $err_msgs1 = ['2021-01-07 10:00', '作業報告', '未承認'];
        $err_msgs2 = ['2021-01-06 10:00', '作業報告', '承認'];
        $err_msgs3 = ['2021-01-05 10:00', '作業報告', '承認'];
        $css = 'dailylist.css';
        $js = 'common.js';

        //ビューを呼び出す
        return view('dailylist', compact('tagu', 'title1', 'title2', 'err_msgs1', 'err_msgs2', 'err_msgs3', 'css', 'js'));
    }
}