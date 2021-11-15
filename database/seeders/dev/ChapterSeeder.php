<?php

namespace Database\Seeders;

use App\Models\Chapter;
use App\Models\Course;
use Illuminate\Database\Seeder;

class ChapterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Chapter::factory(4)->create()->each(function($chapter){
            $chapter->course()->save(Course::factory(4)->make());
        }); */
        Chapter::factory(6)->create();
    }
}
