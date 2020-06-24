@extends('layout.app')

@section('title')
Borrow Book
@endsection

@section('content')
    <div class="buttons-grid">
        <a class="btn btn-sm btn-success" href="{{route('admin.release.add')}}">Add new release</a>
        todo filtering
    </div>
    @if(count($books) > 0)
        <table class="table table-hover">
            <thead>
                <td>No</td>
                <td>Title</td>
                <td>Release No</td>
                <td>Publisher</td>
                <td>ISBN</td>
                <td>Status</td>
                <td>Available</td>
                <td>Actions</td>
            </thead>
            <tbody>
                {{-- {{dd($releases)}} --}}
                @foreach($books as $book)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$book->title->title}} <small>{{$book->title->author->name}} {{$book->title->author->surname}}</small></td>
                        <td>{{$book->release}}</td>
                        <td>{{$book->publisher->name}}</td>
                        <td>{{$book->ISBN}}</td>
                        <td></td>
                        <td></td>
                        <td>
                            {{-- <a class="btn btn-sm btn-outline-primary" href="{{route('admin.release.edit', $release->id)}}">Edit</a> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h2>No records found</h2>
    @endif
@endsection
