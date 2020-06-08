<?php

namespace App\Repositories\Items;

use App\Interfaces\Items\PieceInterface;
use App\Models\Piece;
use App\Repositories\BaseRepository;
use Illuminate\Support\Collection;
use PDO;

class PieceRepository extends BaseRepository implements PieceInterface
{

   /**
    * UserRepository constructor.
    *
    * @param User $model
    */
   public function __construct(Piece $model)
   {
       parent::__construct($model);
   }
}
