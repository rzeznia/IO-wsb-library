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
    public function checkIsUserAlreadyReservedBook(int $user_id, int $release_id): bool;
    public function checkIsUserAlreadyBorrowedBook(int $reservation_id): bool;
    public function getReservationId(int $user_id, int $release_id): int;
}
