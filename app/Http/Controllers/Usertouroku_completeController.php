<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usertouroku_completeController extends Controller
{
    public function usertouroku_complete() 
    {
        //ビューの動作確認用サンプルデータ作成
        $tagu = 'ユーザー登録完了';
        $css = 'usertouroku.css';
        $js = 'common.js';

        //ビューを呼び出す
        return view('usertouroku_complete', compact('tagu', 'css', 'js'));
    }
}
