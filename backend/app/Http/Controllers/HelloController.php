<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    public function index($id) {
        $ids = explode(',', $id);
        $msg = 'get people.';
        $result = DB::table('people')
                ->paginate(3, ['*'], 'page', $id);

        $data = [
            'msg' => $msg,
            'data'=> $result,
        ];
        return view('hello.index', $data);
    }
}