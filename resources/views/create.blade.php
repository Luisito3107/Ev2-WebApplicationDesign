@extends('layouts.app')

@section('title', 'Create book')

@section('content')
    <form action="{{url('book/create')}}" method="POST">
        {{ csrf_field() }}

        <p>
            <label for="name">Book name</label>
            <input required minlength=3 maxlength=255 type="text" name="name" id="name">
        </p>

        <p>
            <label for="author_name">Author name</label>
            <input required minlength=3 maxlength=255 type="text" name="author_name" id="author_name">
        </p>

        <p>
            <label for="isbn">ISBN</label>
            <input required minlength=10 maxlength=17 type="text" name="isbn" id="isbn">
        </p>

        <p>
            <label for="published_year">Published year</label>
            <input required type="number" min="1900" max="2099" step="1" name="published_year" id="published_year">
        </p>

        <p class="text-right">
            <a class="button button-outline" href="{{route('books.view')}}" target="_parent">Cancel</a>
            <button class="button" type="submit">Create</button>
        </p>
    </form>
@endsection
