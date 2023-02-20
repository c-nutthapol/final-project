<?php

namespace App\Http\Livewire\Admin;

use App\Models\RequestLecturer;
use Livewire\Component;

class Instructor extends Component
{
    public function render()
    {

        $requests = RequestLecturer::limit(5)->get();
        return view('livewire.admin.instructor', compact('requests'));
    }
}
