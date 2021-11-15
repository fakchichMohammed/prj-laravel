<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';
    protected $fillable = [
        'title',
        'content',
    ];

    public function user(){
        return $this->belongsTo(User::class,'id','user');
    }

    public function chapters(){
        return $this->hasMany(Chapter::class,'course_id','id');
    }

    public function categories(){
        return $this->belongsToMany(Category::class,'categories_courses','course_id','category_id');
    }

    public function types(){
        return $this->belongsToMany(Type::class,'types_courses','course_id','type_id');
    }
}
