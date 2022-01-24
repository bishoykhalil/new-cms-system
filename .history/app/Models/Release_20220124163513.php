<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;




class Release extends Model
{
  use HasApiTokens, HasFactory, Notifiable;

  protected $fillable = [
    'release_name',
    'status',
    'system_id'
        ];

  public function systems()
      {
          return $this->belongsTo(System::class);
      }

      public function crs()
            {
                return $this->hasMany(Crs::class);
            }
}
