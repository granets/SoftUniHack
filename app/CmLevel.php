<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CmLevel extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = ['level_number', 'level_name'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function con_monster_level()
    {
        return $this->hasMany(ComMonsterLevel::class);
    }
}
