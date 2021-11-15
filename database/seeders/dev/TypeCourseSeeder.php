<?php

namespace Database\Seeders;

use App\Models\TypeCourse;
use Illuminate\Database\Seeder;

class TypeCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeCourse::factory(6)->create();
    }
}
