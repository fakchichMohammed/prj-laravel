<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryCourse extends Model
{
    use HasFactory;

    protected $table = 'categories_courses';
    public $timestamps = false;

    public function courses()
    {
        return $this->belongsToMany(Course::class,'course_id','id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class,'category_id','id');
    }

}
