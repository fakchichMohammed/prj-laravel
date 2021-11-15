<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Type;
use App\Models\TypeCourse;
use Illuminate\Database\Eloquent\Factories\Factory;

class TypeCourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TypeCourse::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'course_id'=>Course::factory(),
            'type_id'=>Type::factory()
        ];
    }
}
