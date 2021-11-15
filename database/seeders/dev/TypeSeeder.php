<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /*  Type::factory(4)->create()->each(function($type){
            $type->courses()->save(Course::factory(4)->make());
        }); */
        Type::factory(6)->create();
    }
}
