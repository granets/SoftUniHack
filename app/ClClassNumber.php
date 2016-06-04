<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClClassNumber extends Model
{
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
}
