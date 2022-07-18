@extends('layouts.helloapp')

@section('title', 'Person.Add')

@section('menubar')
    @parent
    セッションページ
@endsection

@section('content')
    <p>{{ $session_data }}</p>
    <form action="/hello/session" method="post">
        @csrf
        <input type="text" name="input">
        <button type="submit">送信</button>
    </form>
@endsection

@section('footer')
    copyright 2020 tuyano.
@endsection
