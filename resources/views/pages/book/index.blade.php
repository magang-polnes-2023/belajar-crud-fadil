@extends('layouts.app')

@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Book</h1>
    </div>
    <hr>
    <a href="{{ route('book.create') }}" class="btn btn-primary">Add Book</a>
    @if(Session::has('success'))
        <div class="alert alert-success mt-3" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover mt-3">
        <thead class="table-dark" >
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Name</th>
                <th>Author</th>
                <th>Year</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($books->count() > 0)
                @foreach($books as $book)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">
                            <img src="{{ $book->image }}" alt="" width="20%">
                        </td>
                        <td class="align-middle">{{ $book->name }}</td>
                        <td class="align-middle">{{ $book->author }}</td>
                        <td class="align-middle">{{ $book->year }}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('book.show', $book->id) }}" type="button" class="btn btn-secondary">Show</a>
                                <a href="{{ route('book.edit', $book->id) }}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('book.destroy', $book->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this book?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="6">Book Not Found</td>
                </tr>
            @endif
        </tbody>
    </table>

@endsection