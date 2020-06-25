<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = [
        'picture', 'name', 'address', 'phone',
    ];

    public function groups()
    {
        return $this->hasMany('App\Group');
    }

    public function students()
    {
        return $this->hasMany('App\Student');
    }
}
