<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable   = [
        'cr_id',
        'author',
        'body',
        'is_active',
        'release_id'
        ];

}
