<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'title', 'biography', 'website_url', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function groups()
    {
        return $this->belongsToMany('App\Group');
    }

    public function courses()
    {
        return $this->belongsToMany('App\Course');
    }
}