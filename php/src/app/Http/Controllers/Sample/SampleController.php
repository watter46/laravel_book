<?php

namespace App\Http\Controllers\Sample;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function index()
    {
        //値渡し
        $a = 2;
        $b = $a;  // 変数aを代入
        $a = 10;  // 変数aの値を変更

        //参照渡し
        $c = 2;
        $d =& $c;
        $c = 10;
        $data = [
            'a' => $a,
            'b' => $b,
            'c' => $c,
            'd' => $d,
        ];
        return view('hello.sample', $data);
    }
}
