<?php

namespace App\Http\Livewire\Client\Teacher\Course;

use App\Models\Course;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Vinkla\Hashids\Facades\Hashids;

class Students extends Component
{
    public function render()
    {
        $students = User::whereHas('students', function ($query) {
            $query->where('id', $this->idTable);
        })->when(!empty($this->search), function ($query) {
            $query->where('first_name', 'like', '%' . $this->search);
            $query->orWhere('last_name', 'like', '%' . $this->search);
            $query->orWhere(DB::raw("concat(first_name, ' ',last_name)"), 'like', '%' . $this->search);
        })->paginate(4);
        return view('livewire.client.teacher.course.students', compact('students'));
    }

    public $subtitle, $idTable, $idHash, $score = 'all', $search;

    public function mount($id)
    {
        $this->idHash = $id;
        $this->idTable = Hashids::decodeHex($id);
        $record = Course::find($this->idTable);
        if ($record) {
            /* Setting the subtitle to the name of the course. */
            $this->subtitle = $record->name;
        }
    }
}
