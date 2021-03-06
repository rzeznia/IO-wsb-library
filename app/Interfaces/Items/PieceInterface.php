<?php
namespace App\Interfaces\Items;

use App\User;
use Illuminate\Support\Collection;

interface PieceInterface
{
    public function findFreePieces(int $release_id):?Collection;
}
