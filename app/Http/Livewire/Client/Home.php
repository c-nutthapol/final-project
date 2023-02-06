<?php

namespace App\Http\Livewire\Client;

use App\Models\Course;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $courses = Course::limit(8)->get();

        return view('livewire.client.home', compact('courses'));
    }
}
