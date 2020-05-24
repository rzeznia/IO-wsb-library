<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Piece
 *
 * @property int $id
 * @property int $release_id
 * @property int $localisation_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Piece newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Piece newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Piece query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Piece whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Piece whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Piece whereLocalisationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Piece whereReleaseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Piece whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Piece extends Model
{
    //
}
