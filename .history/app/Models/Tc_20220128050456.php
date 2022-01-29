<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tc extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'cr_id',
        'name',
        
        'status',
        'executed',
        'notes',
        'scope'
            ];

    public function cr()
    {
        return $this->belongsTo(Crs::class);
    }
}
