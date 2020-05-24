<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Hire
 *
 * @property int $id
 * @property int $reservation_id
 * @property int $piece_id
 * @property string $start_date
 * @property string|null $end_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Hire newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Hire newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Hire query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Hire whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Hire whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Hire whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Hire wherePieceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Hire whereReservationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Hire whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Hire whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Hire extends Model
{
    //
}
