@extends('layout.app')

@section('title')
Manage Publishers
@endsection

@section('content')
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
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h2>No records found</h2>
    @endif
@endsection
