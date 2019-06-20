<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = [
        'name', 'address', 'phone',
    ];

    public function groups()
    {
        return $this->hasMany('App\Group');
    }
}
