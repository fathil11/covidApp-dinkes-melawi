<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $guarded = [];

    public function person()
    {
        return $this->belongsTo('App\Person', 'person_id');
    }
}
