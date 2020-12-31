<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    public function photos(){
        return $this->belongsToMany(Photo::class)->using(Group_Photo::class)->withPivot("photo_id");
    }

    public function users(){
        return $this->belongsToMany(User::class)->using(Group_User::class)->withPivot("user_id");
    }
}
