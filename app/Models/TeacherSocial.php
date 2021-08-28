<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeacherSocial extends Model
{
    protected $table = 'teacher_socials';

    protected $fillable = [
        'teacher_id', 'social_link'
    ];
}
