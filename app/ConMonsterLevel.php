<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConMonsterLevel extends Model
{
    public function cm_monster()
    {
        return $this->belongsTo(CmMonster::class);
    }

    public function cm_level()
    {
        return $this->belongsTo(CmLevel::class);
    }
}
