<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Contact_us extends Model
{
    protected $table = 'contact_us_requests';

    public $fillable = [
        'name', 'email', 'message'
    ];

    public function getCreatedAtAttribute($key)
    {
        return Carbon::parse($this->attributes['created_at'])->format('Y/m/d');
    }
}
