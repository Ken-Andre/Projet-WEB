<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    use HasFactory;

    public function events()
    {

        //an image can belong to only one event
        return $this->belongsTo(events::class);
    }


    public function users()
    {

        //an image can be add by only one user
        return $this->belongsTo(users::class);
    }

}
