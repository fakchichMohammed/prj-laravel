<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class CourseController extends Controller
{
    /**
     * Show the application home.
     */
    public function index(Request $request): View
    {
        $courses = Course::orderBy('updated_at', 'DESC')
        ->get();
        return view('courses.index', compact('courses'));
    }

    public function show()
    {
        return view('courses.show');
    }

    public function detail($id)
    {
        $course = Course::find($id);
        $categories = Category::all();
        /* $course->categories()->attach($categories); */
        return view('courses.show', compact(['course', 'categories']));
    }

    public function delete($id)
    {
        $course = Course::find($id);

        $course->categories()->detach();
        $course->types()->detach();
        $course->chapters()->detach();
        $course->delete();
        return redirect()->route('home');
    }
}
