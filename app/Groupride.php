<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groupride extends Model
{
    //
    protected $guarded = [];

    public function path() {
        return  "/grouprides/{$this->id}";
    }
}
