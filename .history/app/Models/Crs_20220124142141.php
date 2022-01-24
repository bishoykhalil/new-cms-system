<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Crs extends Model
{
   use HasApiTokens, HasFactory, Notifiable;


   protected $guarded = [
    'name',
    'status',
    'release_id',
    'hasIOT',
    'hasE2E'
        ];

   public function releases()
         {
             return $this->belongsTo(release::class);
         }
}
