<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $fillable = [
        'name', 'description',
    ];

    public function course()
    {
        return $this->belongsTo('App\Course');
    }

    public function groups()
    {
        return $this->hasMany('App\Group');
    }
}
