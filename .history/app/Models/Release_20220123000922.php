<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;



class Release extends Model
{
  use HasApiTokens, HasFactory, Notifiable;

  public function system()
      {
          return $this->belongsTo(System::class);
      }

      public function crs()
            {
                return $this->hasMany(Crs::class);
            }
}
