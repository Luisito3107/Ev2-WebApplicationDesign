@extends('layouts.app')

@section('title', 'Create book')

@section('content')
    <form action="{{url('book/create')}}" method="POST" enctype="multipart/form-data">
        @csrf

        @if($errors->any())
            <div class="form-error">
                <b>The following errors occurred:</b><br>
                {!! implode('<br>', $errors->all(':message')) !!}
            </div>
        @endif

        <p>
            <label for="name">Book name</label>
            <input required minlength=3 maxlength=255 type="text" name="name" id="name" value="{{ old("name") }}">
        </p>

        <p>
            <label for="author_name">Author name</label>
            <input required minlength=3 maxlength=255 type="text" name="author_name" id="author_name" value="{{ old("author_name") }}">
        </p>

        <p>
            <label for="isbn">ISBN</label>
            <input required minlength=10 maxlength=17 type="text" name="isbn" id="isbn" value="{{ old("isbn") }}">
        </p>

        <p>
            <label for="published_year">Published year</label>
            <input required type="number" min="500" max="2099" step="1" name="published_year" id="published_year" value="{{ old("published_year") }}">
        </p>

        <p>
            <label for="book_image">Book cover</label>
            <input type="file" accept="image/*" name="book_image" id="book_image">
        </p>


        <p class="text-right">
            <a class="button button-outline" href="{{route('books.view')}}" target="_parent">Cancel</a>
            <button class="button" type="submit">Create</button>
        </p>
    </form>
@endsection
