@extends('layout.app')

@section('title')
Manage Titles
@endsection

@section('content')
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
                    <td></td>
                </tr>
            @endforeach
    </tbody>
    </table>
@endsection
