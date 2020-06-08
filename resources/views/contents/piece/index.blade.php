@extends('layout.app')

@section('title')
Manage Pieces
@endsection

@section('content')
    <div class="buttons-grid">
        <a class="btn btn-sm btn-success" href="{{ route('piece.add') }}">Add new piece</a>
    </div>
    <table class="table table-hover">
        <thead>
            <td>Piece ID</td>
            <td>Title</td>
            <td>Author</td>
            <td>Release</td>
            <td>Regal</td>
            <td>Shelf</td>
            <td>Position</td>
            <td>Status</td>
            <td>Actions</td>
            {{-- <td>Actions</td> --}}
        </thead>
        <tbody>
            @foreach($pieces as $piece)
                <tr>
                    <td>{{$piece->id}}</td>
                    <td>{{$piece->release->title->title}}</td>
                    <td>{{$piece->release->title->author->name}} {{$piece->release->title->author->surname}}</td>
                    <td>{{$piece->release->release}}</td>
                    <td>{{$piece->localization->regal->name}}</td>
                    <td>{{$piece->localization->shelf}}</td>
                    <td>{{$piece->localization->position}}</td>
                    <td></td>
                    <td>
                        <a class="btn btn-sm btn-outline-primary" href="{{ route('piece.edit', $piece->id) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
    </tbody>
    </table>
@endsection
