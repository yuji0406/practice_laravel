<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index()
    {
        $data = [
            ['name' => '山田太郎', 'mail' => 'example@sample.com'],
            ['name' => '山田花子', 'mail' => 'example1@sample.com'],
            ['name' => '田中次郎', 'mail' => 'example2@sample.com'],
        ];
        $message = "お前まじキモすぎ";
        
        return view('hello.index', ['data' => $data, 'message' => $message]);
    }

    public function post(Request $request)
    {
        return view('hello.index', ['msg' => $request->msg]);
    }
}
