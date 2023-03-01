<?php

namespace App\Http\Livewire\Admin\Home;

use App\Models\RequestLecturer as ModelsRequestLecturer;
use Livewire\Component;

class RequestLecturer extends Component
{
    public function render()
    {
        $requests = ModelsRequestLecturer::orderBy('created_at', 'desc')->limit(5)->get();
        return view('livewire.admin.home.request-lecturer', compact('requests'));
    }
}
