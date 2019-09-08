<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = [
        'name', 'description', 'picture',
    ];

    public function courses()
    {
        return $this->belongsToMany('App\Course');
    }
}