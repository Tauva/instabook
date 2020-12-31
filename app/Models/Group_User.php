<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Group_User extends Pivot
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function group(){
        return $this->belongsTo(Group::class);
    }
}
