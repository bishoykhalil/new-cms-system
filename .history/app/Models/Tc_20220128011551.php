<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tc extends Model
{
    use HasFactory;

    public function cr()
    {
        return $this->belongsTo(Crs::class);
    }
}
