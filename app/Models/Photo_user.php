<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Photo_user extends Pivot
{
    //


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function photo() {
        return $this->belongsTo(Photo::class);
    }

}
