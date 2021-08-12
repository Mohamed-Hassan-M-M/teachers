<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class City extends Model
{

    protected $fillable = [
        'name_ar', 'name_en'
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
    public function areas()
    {
        return $this->hasMany(Area::class, 'city_id', 'id');
    }
}
