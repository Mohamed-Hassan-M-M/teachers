<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeacherArea extends Model
{
    protected $table = 'teacher_areas';

    protected $fillable = [
        'teacher_id', 'area_id'
    ];
}
