<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function monsters()
    {
        return $this->hasMany(CmMonster::class);
    }

    /**
     * Get all of the cl_class_letters for the user.
     */
    public function cl_class_letters()
    {
        return $this->hasMany(ClClassLetter::class);
    }

    /**
     * Get all of the cl_class_letters for the user.
     */
    public function cl_class_numbres()
    {
        return $this->hasMany(ClClassNumber::class);
    }

    /**
     * Get all of the cl_class_letters for the user.
     */
    public function cl_roles()
    {
        return $this->hasMany(ClRole::class);
    }

    public function con_account_monseter()
    {
        return $this->hasMany(ConAccountMonster::class);
    }

    public function cm_class()
    {
        return $this->hasMany(CmClass::class, 'cm_lead_teacher_id');
    }

    public function role()
    {
        return $this->belongsTo(ClRole::class, 'role');
    }    
}
