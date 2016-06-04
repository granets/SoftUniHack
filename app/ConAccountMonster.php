<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConAccountMonster extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cm_monster()
    {
        return $this->belongsTo(CmMonster::class);
    }
}
