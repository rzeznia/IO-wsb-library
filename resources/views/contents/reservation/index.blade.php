@extends('layout.app')

@section('title')
Manage Pending Reservations
@endsection

@section('content')
    {{-- <div class="buttons-grid">
        <a class="btn btn-sm btn-success" href="{{route('release.add')}}">Add new release</a>
    </div> --}}
    @if(count($reservations) > 0)
        <table class="table table-hover">
            <thead>
                <td>No</td>
                <td>User</td>
                <td>Library Card</td>
                <td>Title</td>
                <td>Release No</td>
                <td>Reservation date</td>
                <td>Pending date</td>
                <td>Actions</td>
            </thead>
            <tbody>
                {{-- {{dd($releases)}} --}}
                @foreach($reservations as $reservation)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{ $reservation->user->name }} {{ $reservation->user->surname }}</td>
                        <td>{{ $reservation->user->library_id }}</td>
                        <td>{{$reservation->piece->release->title->title}}</td>
                        <td>{{$reservation->piece->release->release}}</td>
                        <td>{{$reservation->created_at}}</td>
                        <td>{{$reservation->target_date}}</td>
                        <td>
                            <a class="btn btn-sm btn-outline-success" href="{{ route('reservation.accept', $reservation->id) }}">Accept</a>
                            <a class="btn btn-sm btn-outline-danger " href="{{ route('reservation.reject', $reservation->id) }}">Reject</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h2>No records found</h2>
    @endif
@endsection
