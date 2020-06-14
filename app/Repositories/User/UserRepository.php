<?php

namespace App\Repositories\User;

use App\Interfaces\User\UserInterface;
use App\Repositories\BaseRepository;
use App\User as User;
use Illuminate\Support\Collection;

class UserRepository extends BaseRepository implements UserInterface
{

   /**
    * UserRepository constructor.
    *
    * @param User $model
    */
   public function __construct(User $model)
   {
       parent::__construct($model);
   }

   /**
    * @return Collection
    */

    public function getNextLibraryId(): int
    {
        $model = $this->model->latest()->first();
        return ( $model->library_id +1 );
    }

}
