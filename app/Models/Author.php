<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Author
 *
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property string $country
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Author newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Author newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Author query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Author whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Author whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Author whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Author whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Author whereSurname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Author whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Author extends Model
{
    protected $fillable = ['name', 'surname', 'country'];
}
