<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Categories
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Categories newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Categories newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Categories query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Categories whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Categories whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Categories whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Categories whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Categories whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Categories extends Model
{
    //
}
