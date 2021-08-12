<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Sector extends Model
{
    protected $fillable = [
        'name_ar', 'name_en', 'type'
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

    public function getTypeAttribute($key)
    {
        if($this->attributes['type'] == '1'){
            return __('sector.governmental');
        }
        else{
            return __('sector.special');
        }
    }

    /* relations*/
    public function classes()
    {
        return $this->hasMany(Classes::class, 'sector_id', 'id');
    }
}
