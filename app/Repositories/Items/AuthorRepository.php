<?php

namespace App\Repositories\Items;

use App\Interfaces\Items\AuthorInterface;
use App\Models\Author;
use App\Repositories\BaseRepository;
use Illuminate\Support\Collection;

class AuthorRepository extends BaseRepository implements AuthorInterface
{

   /**
    * UserRepository constructor.
    *
    * @param User $model
    */
   public function __construct(Author $model)
   {
       parent::__construct($model);
   }

   /**
    * @return Collection
    */

}
