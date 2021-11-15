<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\CategoryCourse;
use App\Models\Chapter;
use App\Models\Course;
use App\Models\Role;
use App\Models\Type;
use App\Models\TypeCourse;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Roles
        Role::firstOrCreate(['name' => Role::ROLE_EDITOR]);
        $role_admin = Role::firstOrCreate(['name' => Role::ROLE_ADMIN]);

        // Users
        $user = User::firstOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name' => 'admin',
                'password' => Hash::make('admin'),
                'email_verified_at' => now()
            ]
        );

        $user->roles()->sync([$role_admin->id]);
        /* $this->call([
            UserSeeder::class,
            CourseSeeder::class,
            ChapterSeeder::class,
            CategorySeeder::class,
            TypeSeeder::class,
            TypeCourseSeeder::class,
            CategoryCourseSeeder::class,
        ]); */

        // Courses
        $course = Course::firstOrCreate(
            [
                'title' => 'Course II',
                'author_id' => $user->id
            ],
            [
                'posted_at' => now(),
                'content' => "
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 
                    voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
                    cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            ]
        ); 
        
        //Chapters
        $chapter = Chapter::firstOrCreate(
            [
                'title' => 'Chapter C',
                'course_id' => $course->id
            ],
            [
                'content' => "
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 
                    voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
                    cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            ]
        );
        
        
        //Types
        $type = Type::firstOrCreate(
            [
                'title' => 'Type T',
            ],
            [
                'content' => "
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 
                    voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
                    cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            ]
        ); 
        
        
        //Category
        $category = Category::firstOrCreate(
            [
                'title' => 'Category C',
                
            ],
            [
                'content' => "
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 
                    voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
                    cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            ]
        );
        
        
        //Categories_Courses
        $category_course = CategoryCourse::firstOrCreate(
            [
                'course_id' => $course->id,
                'category_id' => $category->id
            ]
        );
        
        //Types_Courses
        $type_course = TypeCourse::firstOrCreate(
            [
                'course_id' => $course->id,
                'type_id' => $type->id
            ]
        );
    }
}
