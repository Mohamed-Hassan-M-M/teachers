<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;

class Blog extends Model
{
    protected $fillable = [
        'title_ar', 'title_en', 'description_ar', 'description_en', 'image', 'date'
    ];

    protected $appends = [
        'title', 'description', 'image_path'
    ];

    public function getImagePathAttribute()
    {
        return Storage::url('public/blogs/' . $this->image);

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
}
