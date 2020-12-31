<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class   Photo extends Model
{
    use HasFactory;


    public function tags() {
        return $this->belongsToMany(Tag::class)->using(Photo_Tag::class)->withPivot("tag_id");
    }

    public function group() {
        return $this->hasOne(Group::class);
    }

    public function owner(){
        return $this->belongsTo(User::class,"user_id");
    }

    public function users(){
        return$this->belongsToMany(User::class)->using(Photo_user::class)->withPivot("user_id");
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }


}
