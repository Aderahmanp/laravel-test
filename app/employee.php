<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{

    public function startup()
    {
        return $this->belongsTo(Startup::class);
    }
}
