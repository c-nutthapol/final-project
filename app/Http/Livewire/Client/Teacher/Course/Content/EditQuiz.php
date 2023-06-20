<?php

namespace App\Http\Livewire\Client\Teacher\Course\Content;

use App\Models\Course;
use App\Models\Quiz;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Vinkla\Hashids\Facades\Hashids;

class EditQuiz extends Component
{
    use LivewireAlert;

    public function render()
    {
        return view('livewire.client.teacher.course.content.edit-quiz');
    }


    public $subtitle, $idTable, $sidTable, $qidTable, $qidHash, $idHash, $sidHash;

    public function mount($id, $sid, $qid)
    {
        $this->idHash = $id;
        $this->sidHash = $sid;
        $this->qidHash = $qid;
        $this->idTable = Hashids::decodeHex($id);
        $this->sidTable = Hashids::decodeHex($sid);
        $this->qidTable = Hashids::decodeHex($qid);
        $record = Course::find($this->idTable);
        $quiz = Quiz::find($this->qidTable);
        if ($record && $quiz) {
            /* Setting the subtitle to the name of the course. */
            $this->subtitle = $record->name;

            $this->name = $record->name;
            $this->questions = $quiz->questions;
        }
    }

    public $name; //simple

    public $questions = []; // type quiz

    protected function rules()
    {
        $rules['name'] = 'required|max:120';
        $rules['questions'] = 'array';
        $rules['questions.*.title'] = 'required|string|max:255';
        $rules['questions.*.answer'] = 'required|in:1,2,3,4';
        $rules['questions.*.choice'] = 'array';
        $rules['questions.*.type'] = 'required';
        $rules['questions.*.choice.*'] = 'required|min:1|max:255';

        return $rules;
    }

    protected $messages = [
        'required' => 'โปรดระบุข้อมูล :attribute',
        'max' => [
            'string' => ':attribute ต้องไม่เกิน :max อักขระ',
        ],
        'in' => ':attribute ที่เลือกไม่ถูกต้อง',
    ];

    protected $attributes = [
        'questions.*.answer' => 'เฉลย',
        'questions.*.choice' => 'ตัวเลือก',
        'questions.*.choice.*' => 'ตัวเลือก',
        'questions.*.title' => 'คำถาม',
        'questions' => 'คำถาม',
        'name' => 'ชื่อเนื้อหาย่อย',
    ];

    public function submit()
    {
        $validateData = $this->validate($this->rules(), $this->messages, $this->attributes);
        try {
            $data['section_id'] = $this->sidTable;
            $data['name'] = $validateData['name'];

            $data['questions'] = $validateData['questions'];
            $data['amount'] = count($validateData['questions']);
            $update = Quiz::find($this->qidTable);
            $update->update($data);
            $this->alert('success', 'บันทึกเสร็จสิ้น', [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
                'showDenyButton' => false,
                'onDenied' => '',
            ]);

            return $this->dispatchBrowserEvent('redirect_page', ['url' => route('client.teacher.course.content.index', $this->idHash)]);
        } catch (\Exception $e) {
            $this->alert('error', 'เกิดข้อผิดพลาดกรุณาลองใหม่อีกครั้ง', [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
                'showDenyButton' => false,
                'onDenied' => '',
                'text' => $e->getMessage(),
            ]);
        }
    }

    public function addQuestion($type = 'multiple-choices')
    {
        $questions = collect($this->questions);
        $questions->push(['type' => $type, 'choice' => [1 => null, 2 => null, 3 => null, 4 => null]]);
        $this->questions = $questions->toArray();
    }

    public function delQuestion($key)
    {
        $questions = collect($this->questions);
        $questions->offsetUnset($key);
        $this->questions = $questions->toArray();
    }
}
