@extends('layouts.app')

@if(Session::has('created'))
    <div>
        <p>{{ Session::get('created') }}</p>
    </div>
@endif

@section('content')
    <h1>Список статей</h1>
    <div>
        <table>
            <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
            </tr>
            </thead>
            <tbody>
            @foreach($articles as $article)
                <tr>
                    <td>{{$article->id}}</td>
                    <td><a href="{{route('articles.show', ['id' => $article->id])}}">{{$article->name}}</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{$articles->links()}}
        <div>
@endsection
