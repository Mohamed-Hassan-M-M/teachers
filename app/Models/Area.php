<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Area extends Model
{
    protected $fillable = [
        'name_ar', 'name_en', 'city_id'
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
    public function city()
    {
        return $this->belongsTo(City::class, 'city_id', 'id');
    }

    /* relations*/
    public function teachers()
    {
        return $this->belongsToMany(User::class, 'teacher__areas', 'area_id', 'teacher_id')->where('type', '2');
    }
}
