@extends('layouts.helloapp')

@section('title', 'Board.index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <table>
        <tr>
            <th>DATA</th>
            <th>Name</th>
        </tr>
        @foreach ($boards as $board)
            <tr>
                @if (!is_null($board->person))
                    <td>{{ $board->message }}</td>
                    <td>{{ $board->person->name }}</td>
                @endif
                {{-- <td><a href="{{ route('person/edit', $board->id) }}">Editページ</a></td> --}}
                {{-- <td><a href="{{ route('person/delete', $board->id) }}">Deleteページ</a></td> --}}
            </tr>
        @endforeach
    </table>
    {{-- <a href="{{ route('person/find') }}">findページ</a> --}}
    <a href="{{ route('board/add') }}">addページ</a>
    <a href="{{ route('person') }}">パーソン一覧</a>
@endsection

@section('footer')
    copyright 2020 tuyano.
@endsection
