@extends('layout.app')

@section('title')
Manage Authors
@endsection

@section('content')
    <div class="buttons-grid">
        <a class="btn btn-sm btn-success" href="{{route('author.add')}}">Add Author</a>
    </div>
    <table class="table  table-hover">
        <tr>
            <td>No</td>
            <td>Name</td>
            <td>Surname</td>
            <td>Nationality</td>
            <td>Actions</td>
        </tr>
        @foreach($authors as $author)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$author->name}}</td>
                <td>{{$author->surname}}</td>
                <td>{{$author->country}}</td>
                <td>
                    <a class="btn btn-sm btn-outline-primary" href="{{ route('author.edit', $author->id) }}">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
