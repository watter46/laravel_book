<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
// use App\MyClasses\MyService;
use App\MyClasses\MyServiceInterface;
use App\Facades\MyService;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    public function index($id = -1){
        if ($id >= 0){
            $msg = 'get ID <= ' . $id;
            $result = DB::table('people')
                ->where('id', '<=', $id)->get();
        }
        else
        {
            $msg = 'get people records.';
            $result = DB::table('people')->get();
        }
        $data = [
            'msg' => $msg,
            'data' => $result,
        ];
        return view('hello.index', $data);
    }
}
