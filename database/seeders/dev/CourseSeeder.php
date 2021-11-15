<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Chapter;
use App\Models\Course;
use App\Models\Type;
use App\Models\User;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::factory(4)->create();
        /* Course::factory(4)->create()->each(function($course){
            $course->user()->save(User::factory(4)->make());
            $course->chapters()->save(Chapter::factory(4)->make());
            $course->types()->save(Type::factory(4)->make());
            $course->categories()->save(Category::factory(4)->make());
        }); */
        
    }
}
