<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class startup extends Model
{
    public function startup()
    {
        return $this->hasMany('App\Employee');
    }
}
