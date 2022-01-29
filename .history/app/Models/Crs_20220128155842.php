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

    public function tc()
    {
        return $this->hasMany(Tc::class , 'id','crs_id');
    }


    /**
     * Get all of the comments for the Crs
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'foreign_key', 'local_key');
    }

   public function release()
         {
             return $this->belongsTo(Release::class);
         }
}
