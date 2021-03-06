<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Title
 *
 * @property int $id
 * @property string $title
 * @property int $author_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Title newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Title newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Title query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Title whereAuthorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Title whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Title whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Title whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Title whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \App\Models\Author|null $author
 */
class Title extends Model
{
    protected $fillable = ['title', 'author_id'];

    public function author(){
        return $this->hasOne(Author::class, 'id', 'author_id');
    }
}
