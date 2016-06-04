<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClRole extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = ['role_name'];

    /**
     * Get the user that created the cl_roles.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
