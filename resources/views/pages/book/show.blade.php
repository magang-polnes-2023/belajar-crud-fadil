@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Detail Book</h1>
    <hr>
    <img src="{{ $book->image }}" class="rounded mx-auto d-block" alt="">
    <div class="row mb-3">
        <div class="col">
            <div class="form-label">Name</div>
            <input type="text" name="name" class="form-control" value="{{ $book->name }}" readonly>
        </div>
        <div class="col">
            <div class="form-label">Author</div>
            <input type="text" name="author" class="form-control" value="{{ $book->author }}" readonly>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <div class="form-label">Year</div>
            <input type="text" name="year" class="form-control" value="{{ $book->year }}" readonly>
        </div>
        <div class="col">
            <div class="form-label">Description</div>
            <textarea class="form-control" name="description" readonly>{{ $book->description }}</textarea>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <div class="form-label">Created At</div>
            <input type="text" name="created_at" class="form-control" value="{{ $book->created_at }}" readonly>
        </div>
        <div class="col">
            <div class="form-label">Updated At</div>
            <input type="text" name="updated_at" class="form-control" value="{{ $book->updated_at }}" readonly>
        </div>
    </div>
@endsection