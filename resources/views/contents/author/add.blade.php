@extends('layout.app')

@section('title')
Add Author
@endsection

@section('content')
    <div class="buttons-grid">
        <a class="btn btn-sm btn-outline-dark" href="{{route('author.index')}}">Back to Authors</a>
    </div>
    <div class="clearfix">
        <form method="POST" action="{{route('author.store')}}">
        @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" class="form-control" name="name" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="surname">Surname</label>
                <input type="text" name="surname" class="form-control" id="surname" placeholder="Enter Surname">
            </div>
            <div class="form-group">
                <label for="country">Nationality</label>
                <input type="text" name="country" class="form-control" id="country" placeholder="Enter nationality">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
