<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CmMonster extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = ['name', 'level', 'picture_id', 'picture', 'code', 'class', 'subject'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cm_level()
    {
        return $this->belongsTo(CmLevel::class);
    }

    public function cl_monster_picture()
    {
        return $this->belongsTo(ClMonsterPicture::class);
    }

    public function cm_awarding()
    {
        return $this->hasMany(CmAwarding::class);
    }

    public function con_account_monseter()
    {
        return $this->hasMany(ConAccountMonster::class);
    }

    public function con_monster_level()
    {
        return $this->hasMany(ComMonsterLevel::class);
    }
}