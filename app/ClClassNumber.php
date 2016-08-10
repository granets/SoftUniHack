<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClClassNumber extends Model
{
    protected $primaryKey = 'class_number';
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = ['class_number'];

    /**
     * Get the user that created the cl_class_numbers.
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
