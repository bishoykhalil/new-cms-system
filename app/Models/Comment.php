<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Comment extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable   = [
        'cr_id',
        'author',
        'body',
        'is_active',
        
        ];

        
   public function cr()
   {
       return $this->belongsTo(Crs::class);
   }

}
