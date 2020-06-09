<?php

namespace App\Interfaces\Operations;

use App\User;
use Illuminate\Support\Collection;

interface ReservationInterface
{
    public function getUserReservations(int $user_id): ?Collection;
    public function getUserReservedTitles(int $user_id): array;

}
