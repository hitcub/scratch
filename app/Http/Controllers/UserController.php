<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user() 
    {
        //ビューの動作確認用サンプルデータ作成
        $tagu = 'ユーザー管理';
        //$title1 = 'ユーザー登録';
        $title2 = 'ユーザーリスト';
        $msgs1 = ['0001', '営業部一課', '山田太郎', '20-01-01', '○'];
        $msgs2 = ['0002', '営業部二課', '田中治郎', '20-01-01', '×'];
        $msgs3 = ['0003', '総務部一課', '佐藤浩一', '20-01-01', '×'];
        $msgs4 = ['0004', '総務部二課', '丸山幸子', '20-01-01', '×'];
        $msgs5 = ['0005', '総務部三課', '武田哲也', '20-01-01', '×'];
        $css = 'user.css';
        $js = 'common.js';

        //ビューを呼び出す
        return view('user', compact('tagu', 'title2', 'msgs1', 'msgs2', 'msgs3', 'msgs4', 'msgs5', 'css', 'js'));
    }
}
