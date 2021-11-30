<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Jobs\MyJob;
use App\Person;

class HelloController extends Controller
{
	public function index(Person $person = null){
		if ($person != null)
        {
            MyJob::dispatch($person)->delay(now()->addMinutes(1));
        }
        $msg = 'show people record.';
        $result = Person::get();

		$data = [
                'input' => '',
				'msg' => $msg,
				'data'=> $result,
		];
		return view('hello.index', $data);
	}

    // public function save($id, $name)
    // {
    //     $record = Person::find($id);
    //     $record->name = $name;
    //     $record->save();
    //     return redirect()->route('index');
    // }

    // public function other()
    // {
    //     $person = new Person();
    //     $person->all_data = ['aaa', 'bbb@ccc', 1234];
    //     $person->save();
    //     return redirect()->route('index');
    // }

    // public function json($id = -1)
    // {
    //     if ($id == -1)
    //     {
    //         return Person::get()->toJson();
    //     }
    //     else
    //     {
    //         return Person::find($id)->toJson();
    //     }
    // }
}
