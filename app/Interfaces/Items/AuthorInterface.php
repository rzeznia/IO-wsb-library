<?php
namespace App\Interfaces\Items;

use App\User;
use Illuminate\Support\Collection;

interface AuthorInterface
{
    public function checkIsAuthorExists(array $data): bool;
}
