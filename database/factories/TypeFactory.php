<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\Factory;

class TypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Type::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->name(),
            'content'=>$this->faker->paragraph,
            //'course'=>Course::factory(1)->create()->first(),
        ];
    }
}
