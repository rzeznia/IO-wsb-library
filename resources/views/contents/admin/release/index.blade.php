@extends('layout.app')

@section('title')
Manage Releases
@endsection

@section('content')
    <div class="buttons-grid">
        <a class="btn btn-sm btn-success" href="{{route('admin.release.add')}}">Add new release</a>
    </div>
    @if(count($releases) > 0)
        <table class="table table-hover">
            <thead>
                <td>No</td>
                <td>Title</td>
                <td>Release No</td>
                <td>Publisher</td>
                <td>ISBN</td>
                <td>Pages</td>
                <td>Price</td>
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
                        <td>{{$release->ISBN}}</td>
                        <td>{{$release->pages}}</td>
                        <td>{{$release->price}}</td>
                        <td>
                            <a class="btn btn-sm btn-outline-primary" href="{{route('admin.release.edit', $release->id)}}">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h2>No records found</h2>
    @endif
@endsection
