<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Category::factory(4)->create()->each(function($category){
            $category->courses()->save(Course::factory(4)->make());
        }); */
        Category::factory(5)->create();
    }
}
