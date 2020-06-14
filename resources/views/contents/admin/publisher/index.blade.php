@extends('layout.app')

@section('title')
Manage Publishers
@endsection

@section('content')
    <div class="buttons-grid">
        <a class="btn btn-sm btn-success" href="{{ route('admin.publisher.add') }}">Add new publisher</a>
    </div>
    @if(count($publishers) > 0)
        <table class="table table-hover">
            <thead>
                <td>No</td>
                <td>Publisher name</td>
                <td>Creation date</td>
                <td>Actions</td>
            </thead>
            <tbody>
                {{-- {{dd($releases)}} --}}
                @foreach($publishers as $publisher)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$publisher->name}}</td>
                        <td>{{$publisher->created_at}}</td>
                        <td>
                            <a class="btn btn-sm btn-outline-primary" href="{{ route('admin.publisher.edit', $publisher->id) }}">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h2>No records found</h2>
    @endif
@endsection
