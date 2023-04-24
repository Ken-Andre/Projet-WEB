<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bucket extends Model
{
    use HasFactory;

    public function users()
    {
        // a bucket can belong to only one user.

        return $this->belongsTo(users::class)->whereHas('role', function ($query) {
            $query->where('role', 'student');
        });
    }

        public function constitute()
    {
        return $this->belongsToMany(users::class,'constitutes','idbuc','idprod')
            ->withPivot('quantity');
    }


}
