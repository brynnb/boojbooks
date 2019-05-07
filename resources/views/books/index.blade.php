@extends('master')

@section('content')
    <a class="btn btn-primary float-right" href="{{route('books.create')}}" role="button">Add Book</a>
    <br/>
    <br/>
    <table class="table" id="books-table">
        <thead>
        <tr>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
            <th scope="col">Publication Date</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
            <tr>
                <td><a href="{{action('BookController@show', ['id' => $book->id])}}">{{$book->title}}</a></td>
                <td>{{$book->author}}</td>
                <td>{{$book->date_publication}}</td>
                <td><a class="delete-book" href="#" data-id="{{$book->id}}">Delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection