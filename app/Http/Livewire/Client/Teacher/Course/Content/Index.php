<?php

namespace App\Http\Livewire\Client\Teacher\Course\Content;

use App\Models\Course;
use App\Models\Section;
use Livewire\Component;
use Vinkla\Hashids\Facades\Hashids;

class Index extends Component
{
    public function render()
    {
        return view('livewire.client.teacher.course.content.index');
    }

    public $subtitle, $idTable, $idHash, $score = 'all';

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

    public function createSection(string $name)
    {
        Section::create(['course_id' => $this->idTable, 'name' => $name]);
    }
}
