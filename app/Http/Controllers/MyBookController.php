<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Interfaces\Operations\HireInterface;
use App\Interfaces\Operations\ReservationInterface;

class MyBookController extends Controller
{
    protected $hire_interface;
    protected $reservation_interface;
    public function __construct(HireInterface $hire_interface, ReservationInterface $reservation_interface)
    {
        $this->middleware('auth');
        $this->hire_interface = $hire_interface;
        $this->reservation_interface = $reservation_interface;
    }

    function index(){
        $reservations = $this->reservation_interface->getUserReservations(\Auth::user()->id);
        $this->reservation_interface->markHires($reservations);
        return view('contents.my.index', compact('reservations'));
    }
}
