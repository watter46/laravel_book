<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Person;

class HelloController extends Controller
{
    public function index(Request $request) {
        $msg = 'show people recorid.';
        $result = Person::get()->reject(function($person){
            return $person->age < 20;
        });
        $result2 = Person::get()->reject(function($person){
            return $person->age < 20;
        });
        $result3 = $result->diff($result2);

        $data = [
            'msg' => $msg,
            'data'=> $result,
        ];
        return view('hello.index', $data);
    }
}
