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
}
