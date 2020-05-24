<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Release
 *
 * @property int $id
 * @property int $title_id
 * @property int $publisher_id
 * @property int $release
 * @property string $ISBN
 * @property float $price
 * @property int $pages
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Release newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Release newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Release query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Release whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Release whereISBN($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Release whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Release wherePages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Release wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Release wherePublisherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Release whereRelease($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Release whereTitleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Release whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Release extends Model
{
    //
}
