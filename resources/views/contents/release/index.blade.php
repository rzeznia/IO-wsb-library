@extends('layout.app')

@section('title')
Manage Releases
@endsection

@section('content')
    @if(count($releases) > 0)
        <table class="table table-hover">
            <thead>
                <td>No</td>
                <td>Title</td>
                <td>Release No</td>
                <td>Publisher</td>
                <td>Actions</td>
            </thead>
            <tbody>
                {{-- {{dd($releases)}} --}}
                @foreach($releases as $release)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$release->title->title}} <small>{{$release->title->author->name}} {{$release->title->author->surname}}</small></td>
                        <td>{{$release->release}}</td>
                        <td>{{$release->publisher->name}}</td>
                        {{-- <td>{{$author->nationality}}</td> --}}
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h2>No records found</h2>
    @endif
@endsection
