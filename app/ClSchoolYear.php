<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClSchoolYear extends Model
{
    protected $primaryKey = 'school_year';
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = ['school_year', 'start_year', 'end_year'];

    /**
     * Get the user that created the cl_school_years.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cm_class()
    {
        return $this->belongsTo(CmClass::class);
    }
}
