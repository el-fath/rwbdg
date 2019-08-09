<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $guarded = [];

    public function group()
    {
        return $this->belongsTo(Group_user::class);
    }
}
