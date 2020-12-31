<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Photo_Tag extends Pivot
{
    //

    public function photo(){
        return $this->belongsTo(Photo::class);
    }

    public function tag(){
        return $this->belongsTo(Tag::class);
    }
}
