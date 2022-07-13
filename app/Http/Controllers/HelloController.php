<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\HelloRequest;
use Illuminate\Support\Facades\Validator;


class HelloController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::select('select * from people');

        return view('hello.index', ['items' => $items ]);
    }

    public function post(Request $request)
    {
        $validate_rule = [
            'msg' => 'required',
        ];

        $this->validate($request, $validate_rule);
        $msg = $request->msg;
        $text = ['msg' => '「' . $msg . '」をクッキーに保存しました。'];

        $response = response()->view('hello.index', $text);

        $response->cookie('msg', $msg, 100);

        return $response;
    }
}
