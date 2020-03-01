<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

     //Branch Relationship
     public function branches()
    {
        return $this->belongsToMany(Branch::class);
    }

    //Roles Relationship
    public function roles()
    {
        // hasMany(RelatedModel, foreignKeyOnRelatedModel = client_id, localKey = id)
        return $this->belongsToMany(Role::class);
    }

    //Roles Helpers    
     
     public function hasRole($role)
    {
        return $this->roles()->whereIn('name',$role)->exists();
    }

    // Roles Helpers are not necessary here. They are just there when using routes for laravel. 
     public function hasAnyRoles($roles)
    {
      
        return null !== $this->roles()->whereIn('name',$roles)->first();
        
    }
     public function hasAnyRole($role)
     {
        return null !== $this->roles()->where('name',$role)->first();
     } 
     //After this go to CMD and create AccessLevel middleware


}
