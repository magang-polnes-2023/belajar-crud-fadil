@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Edit Book</h1>
    <hr>
    <form action="{{ route('book.update', $book->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col">
                <div class="form-label">Image</div>
                <input class="form-control" name="image" type="file" value="{{ $book->image }}" id="image">
            </div>
            <div class="col">
                <div class="form-label">Name</div>
                <input type="text" name="name" class="form-control" value="{{ $book->name }}" placeholder="Book Name">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <div class="form-label">Author</div>
                <input type="text" name="author" class="form-control" value="{{ $book->author }}" placeholder="Author">
            </div>
            <div class="col">
                <div class="form-label">Year</div>
                <input type="text" name="year" class="form-control" value="{{ $book->year }}" placeholder="Year">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <div class="form-label">Description</div>
                <textarea class="form-control" name="description" placeholder="Description" >{{ $book->description }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">update</button>
            </div>
        </div>
    </form>
@endsection