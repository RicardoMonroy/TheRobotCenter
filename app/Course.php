<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'code', 'name', 'description', 'picture', 'editor', 'teacher_id', 'category_id', 'level_id',
    ];

    public function teacher()
    {
        return $this->belongsTo('App\Teacher');
    }

    public function level()
    {
        return $this->hasOne('App\Level');
    }

    public function category()
    {
        return $this->hasOne('App\Category');
    }
}
