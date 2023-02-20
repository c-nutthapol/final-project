<?php

namespace App\Http\Livewire\Client\Teacher\Course\Content;

use App\Models\Course;
use App\Models\Episode;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;
use Vinkla\Hashids\Facades\Hashids;

class EditEP extends Component
{
    use WithFileUploads, LivewireAlert;

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

            $this->video_temp = $episode->video;
            $this->name = $episode->name;
            $this->files_temp = $episode->files ?? [];
        }
    }

    public $name; //simple

    public $video, $video_temp, $files = [], $files_temp; // type video

    protected function rules()
    {
        $rules['name'] = 'required|max:120';
        $rules['video'] = 'nullable|file|mimes:mp4,wmv,avi,mov|max_mb:1024';
        $rules['files'] = 'array';
        $rules['files.*.name'] = 'required';
        $rules['files.*.path'] = 'nullable|file|max_mb:100';

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
        'name' => 'ชื่อเนื้อหาย่อย',
    ];

    public function submit()
    {
        $validateData = $this->validate($this->rules(), $this->messages, $this->attributes);
        try {
            $update = Episode::find($this->cidTable);
            if ($update) {
                $update->name = $validateData['name'];
                if ($this->video) {
                    $update->video = $this->video->store('course/' . $this->idHash . '/section/' . $this->sidHash, 'public');
                    $this->video_temp = $update->video;
                }

                foreach ($this->files as $key => $file) {
                    $data['files'][$key]['name'] = $file['name'];
                    $extension = $file['path']->extension();
                    $data['files'][$key]['path'] = $file['path']->storeAs('course/' . $this->idHash . '/section/' . $this->sidHash . '/assembly', time() . '_' . $file['name'] . '.' . $extension, 'public');

                    $this->files_temp[] = $data['files'][$key];
                }
                $update->files = $this->files_temp;
                $this->files = $update->files;
                $update->save();
            }

            $this->reset('files');

            $this->alert('success', 'บันทึกเสร็จสิ้น', [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
                'showDenyButton' => false,
                'onDenied' => '',
            ]);

            // return $this->dispatchBrowserEvent('redirect_page', ['url' => route('client.teacher.course.content.index', $this->idHash)]);
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

    public function delFile($key, $local = 'local')
    {
        $files = collect($local == 'local' ? $this->files : $this->files_temp);
        $files->offsetUnset($key);
        if ($local == 'local') {
            $this->files = $files->toArray();
        } else {
            $this->files_temp = $files->toArray();
        }
    }

    public function DownloadFile($path)
    {
        try {
            $path = Storage::disk('public')->exists($path) ? Storage::disk('public')->path($path) : false;
            return response()->download($path);
        } catch (\Exception $e) {
            $this->alert('error', 'ไม่พบไฟล์', [
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
}
