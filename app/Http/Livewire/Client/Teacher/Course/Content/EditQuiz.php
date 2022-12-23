<?php

namespace App\Http\Livewire\Client\Teacher\Course\Content;

use App\Models\Course;
use Livewire\Component;
use Vinkla\Hashids\Facades\Hashids;

class EditQuiz extends Component
{
    public function render()
    {
        return view('livewire.client.teacher.course.content.edit-quiz');
    }


    public $subtitle, $idTable, $sidTable, $idHash, $sidHash;

    public function mount($id, $sid, $cid)
    {
        $this->idHash = $id;
        $this->sidHash = $sid;
        $this->idTable = Hashids::decodeHex($id);
        $this->sidTable = Hashids::decodeHex($sid);
        $record = Course::find($this->idTable);
        if ($record) {
            /* Setting the subtitle to the name of the course. */
            $this->subtitle = $record->name;
        }
    }

    public $name, $type; //simple

    public $video, $files = []; // type video

    public $questions = []; // type quiz
}
