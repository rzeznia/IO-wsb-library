@extends('layout.app')

@section('title')
Edit Author
@endsection

@section('content')
    <div class="buttons-grid">
        <a class="btn btn-sm btn-outline-dark" href="{{route('admin.author.index')}}">Back to Authors</a>
    </div>
    <div class="clearfix">
        <form method="POST" action="{{route('admin.author.save', $author->id)}}">
        @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" class="form-control" name="name" value="{{ $author->name }}">
            </div>
            <div class="form-group">
                <label for="surname">Surname</label>
                <input type="text" name="surname" class="form-control" id="surname" value="{{ $author->surname }}">
            </div>
            <div class="form-group">
                <label for="country">Nationality</label>
                <input type="text" name="country" class="form-control" id="country" value="{{ $author->country }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
