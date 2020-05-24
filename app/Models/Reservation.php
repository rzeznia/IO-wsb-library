<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Reservation
 *
 * @property int $id
 * @property int $user_id
 * @property int $piece_id
 * @property string $target_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reservation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reservation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reservation query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reservation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reservation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reservation wherePieceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reservation whereTargetDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reservation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reservation whereUserId($value)
 * @mixin \Eloquent
 */
class Reservation extends Model
{
    //
}
