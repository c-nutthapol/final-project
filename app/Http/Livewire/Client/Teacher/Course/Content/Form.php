<?php

namespace App\Http\Livewire\Client\Teacher\Course\Content;

use App\Models\Course;
use App\Models\Episode;
use App\Models\Quiz;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;
use Vinkla\Hashids\Facades\Hashids;

class Form extends Component
{
    use WithFileUploads, LivewireAlert;

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
            $rules['questions'] = 'array';
            $rules['questions.*.title'] = 'required|string|max:255';
            $rules['questions.*.answer'] = 'required|in:1,2,3,4';
            $rules['questions.*.choice'] = 'array';
            $rules['questions.*.type'] = 'required';
            $rules['questions.*.choice.*'] = 'required|min:1|max:255';
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
        'questions.*.choice.*' => 'ตัวเลือก',
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
        try {
            $data['section_id'] = $this->sidTable;
            $data['name'] = $validateData['name'];
            if ($validateData['type'] == 'video') {

                $data['video'] = $this->video->store('course/' . $this->idHash . '/section/' . $this->sidHash, 'public');
                foreach ($this->files as $key => $file) {
                    $data['files'][$key]['name'] = $file['name'];
                    $extension = $file['path']->extension();
                    $data['files'][$key]['path'] = $file['path']->storeAs('course/' . $this->idHash . '/section/' . $this->sidHash . '/assembly', time() . '_' . $file['name'] . '.' . $extension, 'public');
                }
                Episode::create($data);
                $this->alert('success', 'บันทึกเสร็จสิ้น', [
                    'position' => 'top-end',
                    'timer' => 3000,
                    'toast' => true,
                    'timerProgressBar' => true,
                    'showDenyButton' => false,
                    'onDenied' => '',
                ]);

                return $this->dispatchBrowserEvent('redirect_page', ['url' => route('client.teacher.course.content.index', $this->idHash)]);
            } elseif ($validateData['type'] ==  'quiz') {
                $data['questions'] = $validateData['questions'];
                $data['amount'] = count($validateData['questions']);
                Quiz::create($data);
                $this->alert('success', 'บันทึกเสร็จสิ้น', [
                    'position' => 'top-end',
                    'timer' => 3000,
                    'toast' => true,
                    'timerProgressBar' => true,
                    'showDenyButton' => false,
                    'onDenied' => '',
                ]);

                return $this->dispatchBrowserEvent('redirect_page', ['url' => route('client.teacher.course.content.index', $this->idHash)]);
            }
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
