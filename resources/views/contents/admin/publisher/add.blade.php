@extends('layout.app')

@section('title')
Add Publisher
@endsection

@section('content')
    <div class="buttons-grid">
        <a class="btn btn-sm btn-outline-dark" href="{{route('admin.publisher.index')}}">Back to publishers</a>
    </div>
    <div class="clearfix">
        <form method="POST" action="{{route('admin.publisher.store')}}">
        @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" class="form-control" name="name" placeholder="Enter Publisher Name">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
