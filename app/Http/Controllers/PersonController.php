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

    public function add(Request $request)
    {
        return view('person.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Person::$rules);

        $person = new Person;

        $form = $request->all();

        unset($form['_token']);

        $person->fill($form)->save();

        return redirect('/person');
    }

    public function edit($id)
    {
        $form = $this->person
            ->find($id);

        return view('person/edit', compact('form'));
    }

    public function update(Request $request)
    {
        $this->validate($request, Person::$rules);

        $person = $this->person
            ->find($request->id);

        $form = $request->all();

        unset($form['_token']);

        $person->fill($form)->save();

        return redirect('/person');
    }

    public function delete($id)
    {
        $form = $this->person
            ->find($id);

        return view('person/delete', compact('form'));
    }

    public function destroy(Request $request)
    {
        $this->person
            ->find($request->id)
            ->delete();

        return redirect('/person');
    }

}
