<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClClassSubject extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = ['subject_name'];

    /**
     * Get the user that created the cl_class_subjects.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
