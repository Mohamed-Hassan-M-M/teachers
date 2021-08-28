<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;

class Event extends Model
{
    protected $fillable = [
        'title_ar', 'title_en', 'category_id', 'description_ar', 'description_en', 'image', 'date'
    ];

    protected $appends = [
        'title', 'description', 'image_path'
    ];

    public function getImagePathAttribute()
    {
        return Storage::url('public/events/' . $this->image);

    }

    public function getCreatedAtAttribute($key)
    {
        return Carbon::parse($this->attributes['created_at'])->format('Y/m/d');
    }

    public function getDateAttribute($key)
    {
        return Carbon::parse($this->attributes['date'])->format('Y-m-d');
    }

    public function getNameAttribute($key)
    {
        return $this->attributes['title_'.app()->getLocale()];
    }

    public function getDescriptionAttribute($key)
    {
        return $this->attributes['description_'.app()->getLocale()];
    }

    /* relations*/
    public function Category()
    {
        return $this->belongsTo(EventCategory::class, 'category_id', 'id');
    }

    public function areas()
    {
        return $this->belongsToMany(Area::class, 'event_areas', 'event_id', 'area_id');
    }
}
