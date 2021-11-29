<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Person;

class HelloController extends Controller
{
	public function index(Request $request){
		$msg = 'show people recorid.';
		$even = Person::get()->filter(function($item)
        {
            return $item->id % 2 == 0;
        });
		$map = $even->map(function($item, $key){
            return $item->id . ':' . $item->name;
        });
		$data = [
				'msg' => $map,
				'data'=> $even,
		];
		return view('hello.index', $data);
	}
}
