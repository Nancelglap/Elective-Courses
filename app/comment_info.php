<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class comment_info extends Model
{
    protected $fillable =['title', 'cname', 'tname', 'frequent', 'grade', 'comment', 'uname','published_at'];

    protected $dates = ['published_at'];

    public function setPublishedAtAttribute($date)
    {
        $this -> attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
    }
}
