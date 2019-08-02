<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
        'name', 'level_id', 'school_id',
    ];

    public function level()
    {
        return $this->belongsTo('App\Level');
    }

    public function school()
    {
        return $this->belongsTo('App\School');
    }

    public function course()
    {
        return $this->belongsToMany('App\Course');
    }

    public function students()
    {
        return $this->hasMany('App\Student');
    }
}
