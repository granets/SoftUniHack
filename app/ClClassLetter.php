<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClClassLetter extends Model
{

    protected $primaryKey = 'letter';
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = ['letter'];

    /**
     * Get the user that created the cl_class_letters.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cm_class()
    {
        return $this->hasMany(CmClass::class);
    }
}
