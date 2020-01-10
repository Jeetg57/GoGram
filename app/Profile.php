<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //a profile belongs to a user in the database
    //related to user class
    protected $guarded = [];

    public function profileImage(){
        $imagePath = ($this->image) ?  $this->image : 'profile/JkAKPbqzdo78nNu4qhLJNtVKruJhfa65joKeO8YU.jpeg';
        return '/storage/' . $imagePath;
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function followers(){
        return $this->belongsToMany(User::class);
    }

    
}