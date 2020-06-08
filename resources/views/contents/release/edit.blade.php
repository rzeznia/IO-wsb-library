@extends('layout.app')

@section('title')
Edit Release
@endsection

@section('content')
    <div class="buttons-grid">
        <a class="btn btn-sm btn-outline-dark" href="{{route('release.index')}}">Back to Releases</a>
    </div>
    <div class="clearfix">
        <form method="POST" action="{{route('release.save', $id)}}">
        @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <select id="title" class="form-control" name="title_id">
                    @foreach($titles as $title)
                        <option class="form-control" @if($release->title_id == $title->id) selected @endif value="{{$title->id}}">
                            {{$title->title}} <small>{{$title->author->name}} {{$title->author->surname}}</small>
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="publisher">Publisher</label>
                <select id="publisher" class="form-control" name="publisher_id">
                    @foreach($publishers as $publisher)
                        <option class="form-control" value="{{$publisher->id}}" @if($release->publisher_id == $publisher->id) selected @endif>
                            {{$publisher->name}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="release">Release no</label>
                <input type="text" name="release" class="form-control" id="release" value="{{$release->release}}">
            </div>
            <div class="form-group">
                <label for="country">ISBN</label>
                <input type="text" name="ISBN" class="form-control" id="ISBN" value="{{$release->ISBN}}">
            </div>
            <div class="form-group">
                <label for="country">Price</label>
                <input type="text" name="price" class="form-control" id="price" value="{{$release->price}}">
            </div>
            <div class="form-group">
                <label for="country">Pages</label>
                <input type="text" name="pages" class="form-control" id="pages" value="{{$release->pages}}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
