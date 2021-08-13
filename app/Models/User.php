<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'name_ar', 'name_en', 'description_ar', 'description_en', 'rating', 'type', 'image', 'position', 'email', 'mobile','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    protected $appends = [
        'name', 'description'
    ];

    public function getCreatedAtAttribute($key)
    {
        return Carbon::parse($this->attributes['created_at'])->format('Y/m/d');
    }

    public function getNameAttribute($key)
    {
        return $this->attributes['name_'.app()->getLocale()];
    }

    public function getDescriptionAttribute($key)
    {
        return $this->attributes['description_'.app()->getLocale()];
    }

    public function getTypeAttribute($key)
    {
        if($this->attributes['type'] == '1'){
            return __('teacher.junior');
        }
        elseif($this->attributes['type'] == '2'){
            return __('teacher.senior');
        }
        elseif($this->attributes['type'] == '3'){
            return __('teacher.expert');
        }
        else{
            return __('teacher.great');
        }
    }

    /* relations*/
    public function areas()
    {
        return $this->belongsToMany(Area::class, 'teacher__areas', 'teacher_id', 'area_id');
    }

    public function cities()
    {
        return $this->hasManyThrough(City::class, Teacher_Area::class, 'teacher_id', 'area_id','id', 'city_id');
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'teacher__subjects', 'teacher_id', 'subject_id');
    }
}
