<?php

namespace App\Http\Livewire\Client\Teacher\Course\Content;

use App\Models\Course;
use App\Models\Episode;
use Livewire\Component;
use Vinkla\Hashids\Facades\Hashids;

class EditEP extends Component
{
    public function render()
    {
        return view('livewire.client.teacher.course.content.edit-e-p');
    }


    public $subtitle, $idTable, $sidTable, $cidTable, $idHash, $sidHash, $cidHash;

    public function mount($id, $sid, $cid)
    {
        $this->idHash = $id;
        $this->sidHash = $sid;
        $this->cidHash = $cid;
        $this->idTable = Hashids::decodeHex($id);
        $this->sidTable = Hashids::decodeHex($sid);
        $this->cidTable = Hashids::decodeHex($cid);
        $course = Course::find($this->idTable);
        $episode = Episode::find($this->cidTable);
        if ($course && $episode) {
            /* Setting the subtitle to the name of the course. */
            $this->subtitle = $course->name;

            $this->name = $episode->name;
            $this->files = collect($episode->files)->toArray();
        }
    }

    public $name; //simple

    public $video, $files = []; // type video

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
            $data['video'] = $this->video->store('course/' . $this->idHash . '/section/' . $this->sidHash, 'public');
            foreach ($this->files as $key => $file) {
                $data['files'][$key]['name'] = $file['name'];
                $data['files'][$key]['path'] = $file['path']->storeAs('course/' . $this->idHash . '/section/' . $this->sidHash . '/assembly', time() . '_' . $file['name'], 'public');
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
