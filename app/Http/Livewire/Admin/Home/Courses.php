<?php

namespace App\Http\Livewire\Admin\Home;

use App\Models\Course;
use Livewire\Component;

class Courses extends Component
{
    public function render()
    {
        $courses = Course::orderBy('created_at','desc')->limit(3)->get();

        return view('livewire.admin.home.courses',compact('courses'));
    }
}
