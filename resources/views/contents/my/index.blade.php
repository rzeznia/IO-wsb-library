@extends('layout.app')

@section('title')
Borrow Book
@endsection

@section('content')
    @if(count($reservations) > 0)
        <table class="table table-hover">
            <thead>
                <td>No</td>
                <td>Title</td>
                <td>Active date</td>
                <td>Status</td>
                <td>Actions</td>
            </thead>
            <tbody>
                @foreach($reservations as $book)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$book->piece->release->title->title}} <small>{{$book->piece->release->title->author->name}} {{$book->piece->release->title->author->surname}}</small></td>
                        <td>{{$book->created_at}}</td>
                        <td>
                            @if($book->borrowed)
                                <a class="btn btn-sm btn-outline-success" href="#" disabled>Borrowed</a>
                            @else
                                <a class="btn btn-sm btn-outline-warning" href="#" disabled>Reserved</a>
                            @endif
                        </td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h2>No records found</h2>
    @endif
@endsection
