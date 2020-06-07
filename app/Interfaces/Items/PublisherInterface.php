<?php
namespace App\Interfaces\Items;

use App\User;
use Illuminate\Support\Collection;

interface PublisherInterface
{
    public function checkIsPublisherExists($data): bool;
}
