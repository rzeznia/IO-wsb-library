@extends('layout.app')

@section('title')
Manage Hires
@endsection

@section('content')
    {{-- <div class="buttons-grid">
        <a class="btn btn-sm btn-success" href="{{route('admin.release.add')}}">Add new release</a>
    </div> --}}
    @if(count($hires) > 0)
        <table class="table table-hover">
            <thead>
                <td>No</td>
                <td>User</td>
                <td>Library Card</td>
                <td>Title</td>
                <td>Hire date</td>
                <td>Due date</td>
                <td>Actions</td>
            </thead>
            <tbody>
                {{-- {{dd($releases)}} --}}
                @foreach($hires as $hire)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$hire->reservation->user->name }} {{ $hire->reservation->user->surname }}</td>
                        <td>{{$hire->reservation->user->library_id }}</td>
                        <td>{{$hire->reservation->piece->release->title->title}}</td>
                        <td>{{$hire->created_at}}</td>
                        <td>TBD</td>
                        <td>
                            <a class="btn btn-sm btn-outline-dark" href="{{ route('admin.hire.return', $hire->id) }}">Return</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h2>No records found</h2>
    @endif
@endsection
