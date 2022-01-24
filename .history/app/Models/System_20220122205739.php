<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
class System extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

public function releases(){
 return $this->hasMany(releases::class);
}

}
