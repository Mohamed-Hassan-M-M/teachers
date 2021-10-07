<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class BookSubSubject extends Model
{
    protected $fillable = [
        'name_ar', 'name_en', 'subject_id'
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
    public function books()
    {
        return $this->hasMany(Book::class, 'subSubject_id', 'id');
    }

    public function subject()
    {
        return $this->belongsTo(BookSubject::class, 'subject_id', 'id');
    }

}
