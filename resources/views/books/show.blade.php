@extends('master')

@section('content')
    <h1>{{$book->title}}</h1>
    <br/>
    By {{$book->author}}
    <br/>
    Published {{$book->date_publication}}
    <br/><br/>
    <a href="{{route('books.index')}}">Return to books</a>
@endsection