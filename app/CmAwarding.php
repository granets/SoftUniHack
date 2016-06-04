<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CmAwarding extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = ['monster_id', 'mission_id', 'day_achievement', 'achievement_comment'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cm_mission()
    {
        return $this->belongsTo(CmMission::class);
    }

    public function cm_monster()
    {
        return $this->belongsTo(CmMonster::class);
    }
}
