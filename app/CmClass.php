<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CmClass extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
            'class_letter'
            ,'class_number'
            ,'cm_lead_teacher_id'
            ,'school_year'
            ,'class_code'
        ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cm_lead_teacher_id()
    {
        return $this->belongsTo(User::class, 'cm_lead_teacher_id');
    }

    public function class_letter()
    {
        return $this->belongsTo(ClClassLetter::class);
    }

    public function class_number()
    {
        return $this->belongsTo(ClClassNumber::class);
    }

    public function clSchool()
    {
        return $this->belongsTo(ClSchool::class, 'school_id');
    }

    public function school_year()
    {
        return $this->belongsTo(ClSchoolYear::class);
    }
}
