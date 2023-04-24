<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ideas extends Model
{
    use HasFactory;

    public function users()

        //an idea can be proposed only once by one user.
    {
        return $this->belongsTo(users::class);
    }

    public function valid()

        //an idea can be valid only once by one user.
    {
        return $this->belongsTo(users::class)
                    ->whereHas('role', function ($query) {
        $query->where('role', 'bde');
    });
    }

    public function votes()

        //an idea can be voted only once by one user.
    {
        return $this->belongsToMany(users::class,'votes','idids','matricule');
    }

}

