@extends('layout.app')

@section('title')
Add Title
@endsection

@section('content')
    <div class="buttons-grid">
        <a class="btn btn-sm btn-outline-dark" href="{{route('title.index')}}">Back to Titles</a>
    </div>
    <div class="clearfix">
        <form method="POST" action="{{route('title.store')}}">
        @csrf
            <div class="form-group">
                <label for="name">Title</label>
                <input type="text" id="title" class="form-control" name="title" placeholder="Enter title">
            </div>
            <div class="form-group">
                <label for="author">Author</label>
                <select type="text" name="author_id" class="form-control" id="author" placeholder="Select Author">
                    @foreach($authors as $author)
                        <option value={{ $author->id }}>{{ $author->name }} {{ $author->surname }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
