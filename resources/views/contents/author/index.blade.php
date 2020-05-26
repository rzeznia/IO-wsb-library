@extends('layout.app')

@section('title')
Manage Authors
@endsection

@section('content')
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
                <td>{{$author->nationality}}</td>
                <td></td>
            </tr>
        @endforeach
    </table>
@endsection
