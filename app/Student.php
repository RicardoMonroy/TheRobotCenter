<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'code', 'user_id','school_id', 'group_id',
    ];

    public function school()
    {
         return $this->belongsTo('App\School');
    }

    public function group()
    {
         return $this->belongsTo('App\Group');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
