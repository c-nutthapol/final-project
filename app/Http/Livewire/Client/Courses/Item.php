<?php

namespace App\Http\Livewire\Client\Courses;

use App\Models\Course;
use Livewire\Component;

class Item extends Component
{
    public function render()
    {
        $courses = Course::where('post_status','public')->paginate(12);

        return view('livewire.client.courses.item', compact('courses'));
    }
}
