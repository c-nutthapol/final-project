<?php

namespace App\Http\Livewire\Client\Teacher\Course\Manages;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Learn extends Component
{
    use LivewireAlert;

    public function render()
    {
        return view('livewire.client.teacher.course.manages.learn');
    }
}
