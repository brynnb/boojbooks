@extends('master')

@section('content')
    <form method="POST" action="/books">
        @csrf

        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        @error('author')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        @error('date_publication')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label for="inputTitle">Title</label>
            <input type="text" class="@error('title') is-invalid @enderror form-control" id="inputTitle" name="title"
                   aria-describedby="titleHelp" placeholder="Enter Book Title">
        </div>

        <div class="form-group">
            <label for="inputAuthor">Author</label>
            <input type="text" class="@error('author') is-invalid @enderror form-control" id="inputAuthor" aria-describedby="authorHelp" name="author"
                   placeholder="Enter Book Author">
        </div>

        <div class="form-group">
            <label for="inputDatePublished">Published Date</label>
            <input type="text" class="@error('date_publication') is-invalid @enderror form-control" id="inputDatePublished" aria-describedby="dateHelp"
                   name="date_publication"
                   placeholder="Enter Book Published Date">
            <small id="dateHelp" class="form-text text-muted">Format as YYYY/MM/DD</small>
        </div>

        <br/>
        <br/>
        <button class="btn btn-primary" type="submit">Add Book</button>
    </form>
    <br/><br/>
    <a href="{{route('books.index')}}">Return to books</a>
@endsection