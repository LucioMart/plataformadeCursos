<?php

namespace App;

use App\Course;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Requirement
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Requirement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Requirement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Requirement query()
 * @mixin \Eloquent
 */
class Requirement extends Model
{
    public function course() {
        return $this->belogsTo(Course::class);
    }
}
