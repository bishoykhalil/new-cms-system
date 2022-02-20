<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get all of the comments for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
        return $this->hasMany(post::class);
    }
         
        public function systems()
        {
            return $this->hasMany(System::class);
        }
        public function releases()
        {
            return $this->hasMany(Release::class);
        }

        public function crs(){
            return $this->hasMany(Crs::class);
        }
        public function tcs(){
            return $this->hasMany(Tc::class);
        }
        public function permissions(){
            return $this->belongsToMany(Permission::class);
        }
        public function roles(){
            return $this->belongsToMany(Role::class);
        }
        

        //roles
        public function userHAsRole($role_slug){
            foreach($this->roles as $role){
                   if($role_slug == $role->slug) 
                   return true;
            }
            return false;
        }
        
        
}
