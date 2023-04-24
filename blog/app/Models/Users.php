<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    public function signal()

    {
        //a user can signal one or many events.
        return $this->belongsToMany(events::class,'signals','matricule','ideve')
                    ->withPivot('created_at');
    }

    public function comment()

    {
        //a user can comment one or many events.
        return $this->belongsToMany(events::class,'comments','matricule','ideve')
                    ->withPivot('status');
    }

    public function register()

    {
        //a user can register one or many events.
        return $this->belongsToMany(events::class,'comments','matricule','ideve');
    }

    public function events()

    {
        //a user can post on or many events.
        return $this->hasMany(events::class);
    }

    public function images()
    {
        //a user can add one ou many images
        return $this->hasMany(images::class);
    }

    public function idea()
    {
        //a user can propose one or many ideas
        return $this->hasMany(ideas::class);
    }

    public function votes()

    {
        //a user can vote one or many ideas.
        return $this->belongsToMany(ideas::class,'votes','matricule','idids');
    }

    public function valid()
    {
        //a user can valid one or many ideas
        return $this->hasMany(ideas::class);
    }

    public function bucket()
    {
        //a user can have one or many ideas
        return $this->hasOne(bucket::class);
    }



}
