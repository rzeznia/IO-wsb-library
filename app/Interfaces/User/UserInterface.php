<?php
namespace App\Interfaces\User;

use App\User;
use Illuminate\Support\Collection;

interface UserInterface
{
    public function getNextLibraryId(): int;
}
