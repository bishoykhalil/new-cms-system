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

   protected $fillable   = [
    'name',
    'status',
    'hasIOT',
    'hasE2E',
    'release_id'
    ];

   public function releases()
         {
             return $this->belongsTo(Release::class);
         }
}
