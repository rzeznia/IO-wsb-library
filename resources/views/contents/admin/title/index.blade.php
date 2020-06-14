@extends('layout.app')

@section('title')
Manage Titles
@endsection

@section('content')
    <div class="buttons-grid">
        <a class="btn btn-sm btn-success" href="{{ route('admin.title.add') }}">Add new title</a>
    </div>
    <table class="table table-hover">
        <thead>
            <td>No</td>
            <td>Title</td>
            <td>Author</td>
            <td>Actions</td>
            {{-- <td>Actions</td> --}}
        </thead>
        <tbody>
            @foreach($titles as $title)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$title->title}}</td>
                    <td>{{$title->author->name}} {{$title->author->surname}}</td>
                    {{-- <td>{{$author->nationality}}</td> --}}
                    <td>
                        <a class="btn btn-sm btn-outline-primary" href="{{ route('admin.title.edit', $title->id) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
    </tbody>
    </table>
@endsection
