@extends('layouts.app')

@section('content')
    <h1>{{$item->name}}</h1>
    <div>{{$item->body}}</div>
@endsection
