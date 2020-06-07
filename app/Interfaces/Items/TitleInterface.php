<?php
namespace App\Interfaces\Items;

use App\User;
use Illuminate\Support\Collection;

interface TitleInterface
{
    public function checkIsTitleExists(array $data): bool;
}
