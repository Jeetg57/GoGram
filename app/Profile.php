<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //a profile belongs to a user in the database
    //related to user class
    public function user(){
        return $this->belongsTo(User::class);
    }

    
}