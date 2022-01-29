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
        
        'name',
        'crs_id',
        'status',
        'executed',
        'notes',
        'scope'
            ];

    public function crs()
    {
        return $this->belongsTo(Crs::class ,'crs_id','id');
    }

    /**
     * Get the user that owns the Tc
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'foreign_key', 'other_key');
    }
}