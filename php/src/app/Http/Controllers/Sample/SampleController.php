<?php

namespace App\Http\Controllers\Sample;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function index($id){
        $msg = 'Your ID:' . $id;
        $data = [
            'msg' => $msg,
        ];
        return view('hello.index', $data);
    }



}
