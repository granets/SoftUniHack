<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClSchool extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = ['school_name', 'school_address'];

    /**
     * Get the user that created the cl_schools.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cm_class()
    {
        return $this->hasMany(CmClass::class, 'school_id');
    }
}
