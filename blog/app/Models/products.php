<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;

    protected $connection='mysql2';


    public function constitute()
    {
        return $this->belongsToMany(bucket::class,'constitutes','idprod','idbuc')
            ->withPivot('quantity');
    }
}

