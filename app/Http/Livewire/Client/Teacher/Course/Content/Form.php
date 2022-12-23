<?php

namespace App\Http\Livewire\Client\Teacher\Course\Content;

use App\Models\Course;
use App\Models\Episode;
use Livewire\Component;
use Livewire\WithFileUploads;
use Vinkla\Hashids\Facades\Hashids;

class Form extends Component
{
    use WithFileUploads;

    public function render()
    {
        return view('livewire.client.teacher.course.content.form');
    }


    public $subtitle, $idTable, $sidTable, $idHash, $sidHash;

    public function mount($id, $sid)
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

    protected function rules()
    {
        $rules['name'] = 'required|max:120';
        $rules['type'] = 'in:video,quiz';
        if ($this->type == 'video') {
            $rules['video'] = 'required|file|mimes:mp4,wmv,avi,mov|max_mb:1024';
            $rules['files'] = 'array';
            $rules['files.*.name'] = 'required';
            $rules['files.*.path'] = 'required|file|max_mb:100';
        } elseif ($this->type == 'quiz') {
            $rules['questions'] = 'array|min:1';
            $rules['questions.*.title'] = 'required|string|max:255';
            $rules['questions.*.answer'] = 'required|in:1,2,3,4';
            $rules['questions.*.choice'] = 'array';
            $rules['questions.*.choice.1'] = 'required|min:1|max:255';
            $rules['questions.*.choice.2'] = 'required|min:1|max:255';
            $rules['questions.*.choice.3'] = 'required|min:1|max:255';
            $rules['questions.*.choice.4'] = 'required|min:1|max:255';
        }
        return $rules;
    }

    protected $messages = [
        'required' => 'โปรดระบุข้อมูล :attribute',
        'max_mb' => ':attribute ต้องไม่เกิน :max_mb เมกะไบต์',
        'max' => [
            'string' => ':attribute ต้องไม่เกิน :max อักขระ',
        ],
        'in' => ':attribute ที่เลือกไม่ถูกต้อง',
        'min' => [
            'array' => ':attribute ต้องมีอย่างน้อย :min รายการ'
        ],
        'file' => ':attribute ต้องเป็นไฟล์',
    ];

    protected $attributes = [
        'questions.*.answer' => 'เฉลย',
        'questions.*.choice' => 'ตัวเลือก',
        'questions.*.choice.1' => 'ตัวเลือก',
        'questions.*.choice.2' => 'ตัวเลือก',
        'questions.*.choice.3' => 'ตัวเลือก',
        'questions.*.choice.4' => 'ตัวเลือก',
        'questions.*.title' => 'คำถาม',
        'questions' => 'คำถาม',
        'files' => 'ไฟล์ประกอบการสอน',
        'files.*.name' => 'ชื่อไฟล์',
        'files.*.path' => 'ไฟล์',
        'video' => 'วิดีโอ',
        'type' => 'ประเภทเนื้อหาย่อย',
        'name' => 'ชื่อเนื้อหาย่อย',
    ];

    public function submit()
    {
        $validateData = $this->validate($this->rules(), $this->messages, $this->attributes);
        if ($validateData['type'] == 'video') {
            $data['section_id'] = $this->sidTable;
            $data['name'] = $validateData['name'];
            $data['video'] = $this->video->store('course/' . $this->idHash . '/section/' . $this->sidHash, 'public');
            foreach ($this->files as $key => $file) {
                $data['files'][$key]['name'] = $file['name'];
                $data['files'][$key]['path'] = $file['path']->storeAs('course/' . $this->idHash . '/section/' . $this->sidHash . '/assembly', time() . '_' . $file['name'], 'public');
            }
            Episode::create($data);
        } elseif ($validateData['type'] ==  'quiz') {
        }
    }

    public function addQuestion($type = 'multiple-choices')
    {
        $questions = collect($this->questions);
        $questions->push(['type' => $type]);
        $this->questions = $questions->toArray();
    }

    public function delQuestion($key)
    {
        $questions = collect($this->questions);
        $questions->offsetUnset($key);
        $this->questions = $questions->toArray();
    }
    public function addFile()
    {
        $files = collect($this->files);
        $files->push([]);
        $this->files = $files->toArray();
    }

    public function delFile($key)
    {
        $files = collect($this->files);
        $files->offsetUnset($key);
        $this->files = $files->toArray();
    }
}
