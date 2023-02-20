<?php

namespace App\Http\Livewire\Admin\Home;

use App\Models\Course;
use App\Models\RequestLecturer;
use App\Models\User;
use Livewire\Component;

class Operational extends Component
{
    public function render()
    {
        $courses = Course::count();
        $lectureres = User::where('level', 'lecturer')->count();
        $students = User::where('level', 'student')->count();
        $request = RequestLecturer::count();
        return view('livewire.admin.home.operational', compact('courses', 'lectureres', 'students', 'request'));
    }
}
