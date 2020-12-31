<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Group_Photo extends Pivot
{
    public function photo(){
        return $this->belongsTo(Photo::class);
    }
    public function groups(){
        return $this->belongsTo(Group::class);
    }
}
