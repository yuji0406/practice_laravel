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
        $items = DB::table('people')
            ->orderBy('age', 'ASC')
            ->get();

        return view('hello.index', ['items' => $items ]);
    }

    public function show(Request $request)
    {
        $page = $request->page;
        $items = DB::table('people')
            ->offset($page * 3)
            ->limit(3)
            ->get();

        return view('hello.show', ['items' => $items]);
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

    public function add(Request $request)
    {
        return view('hello.add');
    }

    public function create(Request $request)
    {
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];

        DB::table('people')->insert($param);

        return redirect('/hello');
    }

    public function edit($id)
    {
        $item = DB::table('people')
            ->where('id', $id)
            ->first();

        return view('hello.edit', ['form' => $item]);
    }

    public function update(Request $request)
    {
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];

       DB::table('people')
        ->where('id', $request->id)
        ->update($param);

        return redirect('/hello');
    }

    public function del($id)
    {
        $item = DB::table('people')
            ->where('id', $id)
            ->first();


        return view('hello.del', ['form' => $item]);
    }

    public function remove(Request $request)
    {
        DB::table('people')
            ->where('id', $request->id)
            ->delete();

        return redirect('/hello');
    }

}
