<?php

namespace App\Http\Livewire\Client\Teacher\Course;

use App\Models\Course;
use App\Models\Review;
use Livewire\Component;
use Vinkla\Hashids\Facades\Hashids;

class Reviews extends Component
{
    public function render()
    {
        $reviews = Review::whereHas('course')->paginate(4);

        return view('livewire.client.teacher.course.reviews', compact('reviews'));
    }

    public $subtitle, $idTable, $idHash;

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
