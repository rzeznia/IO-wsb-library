<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Pentality
 *
 * @property int $id
 * @property int $user_id
 * @property int $hire_id
 * @property int|null $amount
 * @property string $due_date
 * @property int $completed
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pentality newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pentality newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pentality query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pentality whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pentality whereCompleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pentality whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pentality whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pentality whereHireId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pentality whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pentality whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Pentality whereUserId($value)
 * @mixin \Eloquent
 */
class Pentality extends Model
{
    //
}
