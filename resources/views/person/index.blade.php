@extends('layouts.helloapp')

@section('title', 'Person.index')

@section('menubar')
    @parent
    ボード・ページ
@endsection

@section('content')
    <table>
        <tr>
            <th>DATA</th>
            <th>Board</th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($hasItems as $item)
            <tr>
                <td>{{ $item->getData() }}</td>
                <td>
                    <table width="100%">
                        @foreach ($item->boards as $board)
                            <tr>
                                <td>
                                    {{ $board->getData() }}
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </td>
                <td><a href="{{ route('person/edit', $item->id) }}">Editページ</a></td>
                <td><a href="{{ route('person/delete', $item->id) }}">Deleteページ</a></td>
            </tr>
        @endforeach
    </table>
    <div style="margin:10px;"></div>
    <table>
        <tr>
            <th>Person</th>
        </tr>
        @foreach ($noItems as $item)
            <tr>
                <td>{{ $item->getData() }}</td>
            </tr>
        @endforeach
    </table>
    <a href="{{ route('person/find') }}">findページ</a>
    <a href="{{ route('person/add') }}">addページ</a>
    <a href="{{ route('board') }}">投稿一覧</a>
@endsection

@section('footer')
    copyright 2020 tuyano.
@endsection
