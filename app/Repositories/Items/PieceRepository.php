<?php

namespace App\Repositories\Items;

use App\Interfaces\Items\PieceInterface;
use App\Models\Piece;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Builder;
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

   public function findFreePieces(int $release_id): ?Collection
   {
       return $this->model->where('release_id', $release_id)->doesnthave('reservation')->get();
   }
}
