@extends('layouts.helloapp')

@section('title', 'Edit')

@section('menubar')
    @parent
    更新ページ
@endsection

@section('content')
    <form action="/hello/edit" method="post">
        <table>
            @csrf
            <input type="hidden" name="id" value="{{ $form->id }}">
            <tr>
                <th>name: </th>
                <td><input type="text" name="name" value="{{ $form->name }}"></td>
            </tr>
            <tr>
                <th>mail: </th>
                <td><input type="text" name="mail" value="{{ $form->mail }}"></td>
            </tr>
            <tr>
                <th>age: </th>
                <td><input type="text" name="age" value="{{ $form->age }}"></td>
            </tr>
        </table>
        <button type="submit">送信</button>
    </form>
    <a href="{{ route('/hello') }}">戻る</a>
@endsection

@section('footer')
    copyright 2020 tuyano.
@endsection
