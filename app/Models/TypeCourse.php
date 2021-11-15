<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeCourse extends Model
{
    use HasFactory;

    protected $table = 'types_courses';
    public $timestamps = false;

    public function types()
    {   
        return $this->belongsToMany(Type::class,'type_id','id');
    }

    public function courses()
    {   
        return $this->belongsToMany(Course::class,'course_id','id');
    }
}
