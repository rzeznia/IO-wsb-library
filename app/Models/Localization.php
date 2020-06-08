<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Localization
 *
 * @property int $id
 * @property int $regal_id
 * @property int $shelf
 * @property int $position
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Localization newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Localization newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Localization query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Localization whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Localization whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Localization wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Localization whereRegalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Localization whereShelf($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Localization whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Localization extends Model
{
    public function regal(){
        return $this->hasOne(Regal::class, 'id', 'regal_id');
    }
}
