<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crs extends Model
{
   use HasApiTokens, HasFactory, Notifiable;

   public function release()
         {
             return $this->belongsTo(release::class);
         }
}
