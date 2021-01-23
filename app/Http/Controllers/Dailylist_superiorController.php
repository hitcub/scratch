<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dailylist_superiorController extends Controller
{
    public function dailylist_superior() 
    {
        //ビューの動作確認用サンプルデータ作成
        $tagu = '日報承認';
        $title1 = '日報承認';
        $title2 = '日報一覧';
        $belong1 = '総務部総務課';
        $belong2 = '営業部営業課';
        $belong3 = '工務部工務課';
        $name1 = '斎藤工';
        $name2 = '妻夫木聡';
        $name3 = '木村拓哉';
        $msgs1 = ['2021-01-07 10:00', '営業部一課', '山田太郎', '作業報告', '未承認'];
        $msgs2 = ['2021-01-06 10:00', '営業部二課', '田中治郎', '作業報告', '承認'];
        $msgs3 = ['2021-01-05 10:00', '総務部一課', '佐藤浩一', '作業報告', '未承認'];
        $msgs4 = ['2021-01-04 10:00', '総務部二課', '丸山幸子', '作業報告', '承認'];
        $msgs5 = ['2021-01-03 10:00', '総務部三課', '武田哲也', '作業報告', '承認'];
        $err_msgs1 = ['2021-01-07 10:00', '営業部一課', '山田太郎',  '作業報告', '未承認'];
        $err_msgs2 = ['2021-01-06 10:00', '営業部二課', '田中治郎', '作業報告', '承認'];
        $err_msgs3 = ['2021-01-05 10:00', '総務部一課', '佐藤浩一',  '作業報告', '承認'];
        $err_msgs4 = ['2021-01-04 10:00', '総務部二課', '丸山幸子', '作業報告', '承認'];
        $err_msgs5 = ['2021-01-03 10:00', '総務部三課', '武田哲也', '作業報告', '承認'];
        $css = 'dailylist.css';
        $js = 'common.js';

        //ビューを呼び出す
        return view('dailylist_superior', compact('tagu', 'title1', 'title2', 'belong1', 'belong2', 'belong3', 'name1', 'name2', 'name3', 'msgs1', 'msgs2', 'msgs3', 'msgs4', 'msgs5', 'err_msgs1', 'err_msgs2', 'err_msgs3', 'err_msgs4', 'err_msgs5', 'css', 'js'));
    }
}
