@extends('layouts.app')

@section('title', 'All books')

@section('menu')
    <div>
        <a href="{{route('books.create')}}"><button>Create new book</button></a>
    </div>
@endsection

@section('content')
    <table>
        <thead>
            <tr>
                <th style="width: 120px">Book Cover</th>
                <th>Book Name</th>
                <th>Author Name</th>
                <th>ISBN</th>
                <th>Published Year</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($books as $book)
                <tr>
                    <td>
                        @if($book->image_path)
                            @if(Storage::disk('public')->exists($book->image_path))
                                <img class="bookCover" src="{{ asset("storage/" . $book->image_path) }}" alt="Book cover">
                            @else
                                Not found
                            @endif
                        @else
                            Not provided
                        @endif
                    </td>
                    <td>{{ $book->name }}</td>
                    <td>{{ $book->author_name }}</td>
                    <td>{{ $book->isbn }}</td>
                    <td>{{ $book->published_year }}</td>
                    <td>
                        <a class="button" href="{{ route('books.update', $book) }}">Edit</a>
                        <br>
                        <form action="{{ route('books.delete.crud', $book) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')

                            <button class="button button-outline button-red" type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No books found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection