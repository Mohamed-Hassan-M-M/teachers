<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class BookSubject extends Model
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
    public function books()
    {
        return $this->hasMany(Book::class, 'subject_id', 'id');
    }

}
