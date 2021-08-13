<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Subject extends Model
{
    protected $fillable = [
        'name_ar', 'name_en', 'class_id'
    ];

    protected $appends = [
        'name'
    ];

    public function getCreatedAtAttribute($key)
    {
        return Carbon::parse($this->attributes['created_at'])->format('Y/m/d');
    }

    public function getNameAttribute($key)
    {
        return $this->attributes['name_'.app()->getLocale()];
    }

    /* relations*/
    public function classes()
    {
        return $this->belongsTo(Classes::class, 'class_id', 'id');
    }

    public function teachers()
    {
        return $this->belongsToMany(User::class, 'teacher__subjects', 'subject_id', 'teacher_id')->where('type', '2');
    }

}
