<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'code', 'name', 'description', 'picture', 'editor', 'teacher_id', 'category_id', 'level_id',
    ];

    public function level()
    {
        return $this->hasOne('App\Level');
    }

    public function category()
    {
        return $this->hasOne('App\Category');
    }

    public function groups()
    {
        return $this->belongsToMany('App\Group');
    }

    public function teachers()
    {
        return $this->belongsToMany('App\Teacher');
    }

    public function materials()
    {
        return $this->belongsToMany('App\Material');
    }
}
