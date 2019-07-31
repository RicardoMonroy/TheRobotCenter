<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'firstTitle', 'firstCopy', 'firstText', 'secondTitle', 'secondCopy', 'secondText',
    ];
}
