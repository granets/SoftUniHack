<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClMonsterPicture extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = ['picture'];

    /**
     * Get the user that created the cl_monster_pictures.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
