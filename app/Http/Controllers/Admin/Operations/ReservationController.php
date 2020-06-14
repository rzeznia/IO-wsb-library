<?php

namespace App\Http\Controllers\Admin\Operations;
use App\Http\Controllers\Controller;
use App\Interfaces\Operations\ReservationInterface;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    private $reservation_interface;

    public function __construct(ReservationInterface $reservation_interface)
    {
        $this->middleware('auth');
        $this->reservation_interface = $reservation_interface;
    }

    function index(){
        $reservations = $this->reservation_interface->getAllReservations()->load('piece.release.title')->load('user');
        // dd($reservations);
        return view('contents.admin.reservation.index', compact('reservations'));
    }

    public function accept($id){
        $reservation = $this->reservation_interface->find($id);
        if($reservation){
            $this->reservation_interface->acceptReservation($id);
        }
        return redirect()->route('admin.reservation.index')->withSuccess('Reservation Accepted');
    }

    public function reject($id){
        $reservation = $this->reservation_interface->find($id);
        if($reservation){
            $this->reservation_interface->rejectReservation($id);
        }
        return redirect()->route('admin.reservation.index')->withSuccess('Reservation Rejected');
    }
}

