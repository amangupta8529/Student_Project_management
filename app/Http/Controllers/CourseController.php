<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Course;
use Illuminate\View\view;

class CourseController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function index()
    {
        $courses = Course::all();
        return view('courses.index')->with('courses', $courses);
    }
    public function create()
    {
        return view('courses.create');
    }
    public function store(Request $request)
    {
        $input = $request->all();
        Course::create($input);
        return redirect('courses')->with('flash_message', 'Course Addes');
    }
    public function show(string $id)
    {
        $courses = Course::find($id);
        return view('courses.show')->with('courses', $courses);
    }

    /**
     * Other methods in the controller, such as edit, update, destroy, etc.
     */

    // Example edit method
    public function edit(string $id)
    {
        $courses = Course::find($id);
        return view('courses.edit')->with('courses', $courses);
    }

    // Example update method
    public function update(Request $request, string $id)
    {
        $courses = Course::find($id);
        $input = $request->all();
        $courses->update($input);
        return redirect('courses')->with('flash_message', 'Course Updated!');
    }

    // Example destroy method
    public function destroy(string $id)
    {
        Course::destroy($id);
        return redirect('courses')->with('flash_message', 'Course deleted!');
    }
}
