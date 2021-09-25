<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Review extends Model
{
    protected $fillable = [
        'student_id', 'teacher_id', 'message', 'status', 'rate'
    ];

    public function getCreatedAtAttribute($key)
    {
        return Carbon::parse($this->attributes['created_at'])->format('M d, Y');
    }

    public function getStatusAttribute($key)
    {
        if($this->attributes['status'] == '0'){
            return __('review.pending');
        }
        elseif($this->attributes['status'] == '1'){
            return __('review.approved');
        }
        elseif($this->attributes['status'] == '2'){
            return __('review.rejected');
        }
        else{
            return '';
        }
    }

    /* relations*/
    public function student()
    {
        return $this->belongsTo(User::class, 'student_id', 'id');
    }

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id', 'id');
    }

}
