<?php

namespace App\Http\Livewire\Client\Auth\Courses;

use App\Models\Course;
use Livewire\Component;

class Item extends Component
{
    public function render()
    {
        $user = auth()->user();

        $courses =  Course::whereHas('students', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })->paginate(12);

        return view('livewire.client.auth.courses.item', compact('courses'));
    }
}
