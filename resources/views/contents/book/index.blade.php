@extends('layout.app')

@section('title')
Borrow Book
@endsection

@section('content')
    <div class="buttons-grid">
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
                {{-- {{dd($books)}} --}}
                @foreach($books as $book)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$book->title->title}} <small>{{$book->title->author->name}} {{$book->title->author->surname}}</small></td>
                        <td>{{$book->release}}</td>
                        <td>{{$book->publisher->name}}</td>
                        <td>{{$book->ISBN}}</td>
                        <td>Free: {{$book->free_count}}</td>
                        <td>
                            @if($book->free_count > 0) Yes @else No @endif

                        </td>
                        <td>
                            @if($book->reserved)
                                @if($book->borrowed)
                                    <a class="btn btn-sm btn-outline-success" href="#" disabled>Borrowed</a>
                                @else
                                    <a class="btn btn-sm btn-outline-warning" href="#" disabled>Reserved</a>
                                @endif
                            @else
                                <a class="btn btn-sm btn-outline-primary" href="{{route('book.reserve', $book->id)}}">Make Reservation</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h2>No records found</h2>
    @endif
@endsection
