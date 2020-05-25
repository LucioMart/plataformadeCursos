<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Teachers
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $title
 * @property string|null $biography
 * @property string|null $website_url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teachers newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teachers newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teachers query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teachers whereBiography($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teachers whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teachers whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teachers whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teachers whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teachers whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Teachers whereWebsiteUrl($value)
 * @mixin \Eloquent
 */
class Teachers extends Model
{
    public function courses() {
        return $this->hasMany(Course::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
