<?php

namespace App\Http\Livewire\Client\Teacher\Course\Manages;

use App\Models\Category;
use App\Models\Course;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;
use Vinkla\Hashids\Facades\Hashids;

class Overview extends Component
{
    use WithFileUploads, LivewireAlert;

    public function render()
    {
        /* Getting all the categories from the database. */
        $categories = Category::get();
        /* Getting all the sub categories that belongs to the category that the user selected. */
        $sub_categories = SubCategory::where('category_id', $this->category)->get();
        return view('livewire.client.teacher.course.manages.overview', compact('categories', 'sub_categories'));
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

            /* Setting the value of the input fields to the value of the record. */
            $this->name = $record->name;
            $this->category = $record->sub_category->category->id;
            $this->sub_category_id = $record->sub_category->id;
            $this->level = $record->level;
            $this->description = $record->description;
            $this->video_temp = $record->video;
            $this->image_temp = $record->image;
        }
    }

    public $image_temp, $video_temp;

    /* Declaring the variables that will be used in the component. */
    public $name, $category, $sub_category_id, $level, $description, $video, $image;

    /* A validation rule for the form. */
    protected $rules = [
        'name' => 'required|string|min:8|max:255',
        'category' => 'required|exists:categories,id',
        'sub_category_id' => 'required|exists:sub_categories,id',
        'level' => 'required|in:entry,moderate,high',
        'description' => 'nullable',
        'video' => 'nullable|file|mimes:mp4,wmv,avi,mov|max_mb:1024',
        'image' => 'image|nullable'
    ];

    /* For the validation error message. */
    protected $attributes = [
        'name' => 'ชื่อคอร์ส',
        'category' => 'หมวดหมู่',
        'sub_category_id' => 'หมวดหมู่ย่อย',
        'level' => 'ระดับคอร์สเรียน',
        'video' => 'วิดีโอแนะนำคอร์ส',
        'image' => 'รูปปกคอร์สเรียน',
        'description' => 'รายละเอียด'
    ];

    protected $messages = [
        'required' => 'โปรดระบุข้อมูล :attribute',
        'max_mb' => ':attribute ต้องไม่เกิน :max_mb เมกะไบต์',
        'max' => [
            'string' => ':attribute ต้องไม่เกิน :max อักขระ',
            'file' => ':attribute ต้องไม่เกิน :max กิโลไบต์',
        ],
        'min' => [
            'string' => ':attribute ต้องมีอักขระอย่างน้อย :min',
        ],
        'same' => ':attribute และ :other ต้องตรงกัน',
        'image' => ':attribute ต้องเป็นรูปภาพ',
        'exists' => ':attribute ที่เลือกไม่ถูกต้อง'
    ];

    public function submit()
    {
        try {
            $update = Course::find($this->idTable);
            $validateData = $this->validate($this->rules, $this->messages, $this->attributes);
            if (!empty($this->image)) {
                if ($update->image != null && Storage::exists($update->image)) {
                    Storage::delete($update->image);
                }
                $update->image = $this->image->store('course/' . $this->idHash, 'public');
            }
            if (!empty($this->video)) {
                if ($update->video != null && Storage::exists($update->video)) {
                    Storage::delete($update->video);
                }
                $update->video = $this->video->store('course/' . $this->idHash, 'public');
                $this->video_temp = $update->video;
            }
            $update->name = $validateData['name'];
            $update->sub_category_id = $validateData['sub_category_id'];
            $update->level = $validateData['level'];
            $update->description = $validateData['description'];
            $update->save();

            $this->alert('success', 'บันทึกเสร็จสิ้น', [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
                'showDenyButton' => false,
                'onDenied' => '',
            ]);
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
}
