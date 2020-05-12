@extends('layout.app')

@section('title')
Manage Users
@endsection

@section('content')
    <table class="table  table-hover">
        <tr>
            <td>No</td>
            <td>Name</td>
            <td>Email</td>
            <td>Actions</td>
        </tr>
        <tr>
            @foreach($users as $user)
                <td>{{$loop->iteration}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td></td>
            @endforeach
        </tr>
    </table>
@endsection
