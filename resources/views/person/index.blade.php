@extends('layouts.helloapp')

@section('title', 'Person.index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <table>
        <tr>
            <th>DATA</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->getData() }}</td>
                <td><a href="{{ route('person/edit', $item->id) }}">Editページ</a></td>
            </tr>
        @endforeach
    </table>
    <a href="{{ route('person/find') }}">findページ</a>
    <a href="{{ route('person/add') }}">addページ</a>
@endsection

@section('footer')
    copyright 2020 tuyano.
@endsection
