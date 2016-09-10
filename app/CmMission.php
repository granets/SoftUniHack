<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CmMission extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */

    protected $fillable = ['mission', 'points'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cm_awarding()
    {
        return $this->hasMany(CmAwarding::class);
    }
    
    public function cmLevel()
    {
        return $this->belongsTo(CmLevel::class, 'min_level');
    }
}
