<?php

namespace App\Interfaces\Operations;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface ReservationInterface
{
    public function getUserReservations(int $user_id): ?Collection;
    public function getUserReservedTitles(int $user_id): array;
    public function getAllReservations($valid = true): ?Collection;
    public function acceptReservation(int $id): ?Model;
    public function rejectReservation(int $id): ?Model;
}
