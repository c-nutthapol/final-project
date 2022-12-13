<?php

namespace App\Http\Livewire\Client\Teacher;

use App\Models\Course;
use Livewire\Component;

class Courses extends Component
{
    protected $listeners = ['coursesRefresh' => '$refresh'];

    public function render()
    {
        $user = auth()->user();
        $courses = Course::where('created_by', $user->id)->get();

        return view('livewire.client.teacher.courses', compact('courses'));
    }
}
