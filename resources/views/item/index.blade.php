@extends('layouts.app')

@if(Session::has('created'))
    <div>
        <p>{{ Session::get('created') }}</p>
    </div>
@endif

@if(Session::has('updated'))
    <div>
        <p>{{ Session::get('updated') }}</p>
    </div>
@endif

@section('content')
    <h1>Items list</h1>
    <div>
        <table>
            <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
            </tr>
            </thead>
            <tbody>
            @foreach($items as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>
                        <a href="{{route('items.show', ['item' => $item])}}">{{$item->name}}</a>&nbsp;|&nbsp;
                        <a href="{{route('items.edit', ['item' => $item])}}">edit</a>&nbsp;|&nbsp;
                        <a href="{{route('items.destroy', ['item' => $item])}}"
                           data-confirm="Are you sure?"
                           rel="nofollow"
                           data-method="delete">del</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{$items->links()}}
        <div>
@endsection
