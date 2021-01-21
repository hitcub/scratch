<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usertouroku_confirmController extends Controller
{
    public function usertouroku_confirm() 
    {
        //ビューの動作確認用サンプルデータ作成
        $tagu = 'ユーザー登録確認';
        $title = 'ユーザー登録確認';
        $css = 'usertouroku_confirm.css';
        $js = 'common.js';
        $id = '0001';
        $department = 'なし';
        $division = 'なし';
        $position = '会長';
        $sei1 = '表';
        $mei1= '一郎';
        $sei2 = 'オモテ';
        $mei2 = 'イチロウ';
        $email = 'email@mail.com';
        $password = '11111111';

        //ビューを呼び出す
        return view('usertouroku_confirm', compact('tagu', 'title', 'css', 'js', 'id', 'department', 'division', 'position', 'sei1', 'mei1', 'sei2', 'mei2', 'email', 'password'));
    }
}
