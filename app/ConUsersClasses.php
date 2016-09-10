<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConUsersClasses extends Model
{
    public function cm_lead_teacher_id()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function cm_class_id()
    {
        return $this->belongsTo(CmClass::class, 'cm_class_id');
    }
}
