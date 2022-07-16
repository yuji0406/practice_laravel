<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{

    public function __construct(Person $person)
    {
        $this->person = $person;
    }
    public function index(Request $request)
    {
        $items = $this->person->all();
        return view('person.index', compact('items'));
    }

    public function find(Request $request)
    {
        return view('person.find', ['input' => '']);
    }

    public function search(Request $request)
    {
        $min = $request->input;
        $max = $min + 10;

        $item = $this->person
            ->ageGreaterThan($min)
            ->ageLessThan($max)
            ->first();
            
        $param = [
            'input' => $request->input,
            'item' => $item,
        ];

        return view('person.find', $param);
    }
}
