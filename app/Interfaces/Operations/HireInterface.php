<?php

namespace App\Interfaces\Operations;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface HireInterface
{
    public function returnBook(int $id);
    public function getAllActiveHires();
}
