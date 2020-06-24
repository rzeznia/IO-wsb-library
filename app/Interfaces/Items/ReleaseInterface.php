<?php
namespace App\Interfaces\Items;

use App\User;
use Illuminate\Support\Collection;

interface ReleaseInterface
{
    public function getFullReleases(): ?Collection;
    public function getAllData(): ?Collection;
}
