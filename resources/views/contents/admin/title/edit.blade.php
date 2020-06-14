@extends('layout.app')

@section('title')
Edit Title
@endsection

@section('content')
    <div class="buttons-grid">
        <a class="btn btn-sm btn-outline-dark" href="{{route('admin.title.index')}}">Back to Titles</a>
    </div>
    <div class="clearfix">
        <form method="POST" action="{{route('admin.title.save', $id)}}">
        @csrf
            <div class="form-group">
                <label for="name">Title</label>
                <input type="text" id="title" class="form-control" name="title" value="{{ $title->title }}">
                <span class="mt-1 ml-3">By: {{ $title->author->name }} {{ $title->author->surname }}</span>
            </div>
            <div class="form-group">
                <input type="hidden" id="title" class="form-control" name="author_id" value="{{ $title->author->id }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
