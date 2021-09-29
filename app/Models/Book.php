<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;

class Book extends Model
{
    protected $fillable = [
        'title_ar', 'title_en', 'subject_id', 'description_ar', 'description_en', 'image', 'date', 'author', 'content'
    ];

    protected $appends = [
        'title', 'description', 'image_path'
    ];

    public function getImagePathAttribute()
    {
        return Storage::url('public/books/' . $this->image);

    }

    public function getCreatedAtAttribute($key)
    {
        return Carbon::parse($this->attributes['created_at'])->format('Y/m/d');
    }

    public function getDateAttribute($key)
    {
        return Carbon::parse($this->attributes['date'])->format('d M, Y');
    }

    public function getTitleAttribute($key)
    {
        return $this->attributes['title_'.app()->getLocale()];
    }

    public function getDescriptionAttribute($key)
    {
        return $this->attributes['description_'.app()->getLocale()];
    }

    /* relations*/
    public function subject()
    {
        return $this->belongsTo(BookSubject::class, 'subject_id', 'id');
    }
}
