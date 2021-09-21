<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'name_ar', 'name_en', 'description_ar', 'description_en', 'rating', 'type', 'image', 'position', 'email', 'mobile','password', 'gender'
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
        'name', 'description', 'image_path'
    ];

    public function getImagePathAttribute()
    {
        return Storage::url('public/teachers/' . $this->image);

    }

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

    public function getPositionAttribute($key)
    {
        if($this->attributes['position'] == '1'){
            return __('teacher.junior');
        }
        elseif($this->attributes['position'] == '2'){
            return __('teacher.senior');
        }
        elseif($this->attributes['position'] == '3'){
            return __('teacher.expert');
        }
        else{
            return __('teacher.great');
        }
    }

    /* relations*/
    public function areas()
    {
        return $this->belongsToMany(Area::class, 'teacher_areas', 'teacher_id', 'area_id');
    }

    public function cities()
    {
        $areas = Area::select('city_id')->whereIn('id', $this->areas->pluck('id'))->groupBy('city_id')->pluck('city_id');
        return City::whereIn('id', $areas)->count();
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'teacher_subjects', 'teacher_id', 'subject_id');
    }

    public function socialLink()
    {
        return $this->hasMany(TeacherSocial::class, 'teacher_id', 'id');
    }

}
