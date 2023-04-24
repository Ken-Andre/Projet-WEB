<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class events extends Model
{
    use HasFactory;

    public function signal()
    {
        //a event can be signal by one or many users
        return $this->belongsToMany(users::class,'signals','ideve','matricule')
            ->whereHas('role',function ($query){
            $query->where('role','staff')
            ->withpivot('created_at');
        });

    }
    public function comment()
    {
        //a event can be comment by one or many users
        return $this->belongsToMany(users::class,'comments','ideve','matricule')
                    ->withPivot('status');
    }

    public function register()
    {
        //a event can have one ou many users registered
        return $this->belongsToMany(users::class,'registers','ideve','matricule');
    }

    public function users()
    {
        //a event be post by one and one users
        return $this->belongsTo(users::class)->whereHas('role', function ($query) {
            $query->where('role', 'bde');
        });
    }

    public function images()
    {
        //a event can have one ou many images
        return $this->hasMany(images::class);
    }



}
