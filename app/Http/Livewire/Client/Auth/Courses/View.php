<?php

namespace App\Http\Livewire\Client\Auth\Courses;

use App\Models\Course;
use App\Models\Review;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Vinkla\Hashids\Facades\Hashids;

class View extends Component
{
    use LivewireAlert;

    public function render()
    {
        return view('livewire.client.auth.courses.view');
    }

    protected $listeners = ['refreshComponent' => 'loadData'];

    public $subtitle, $idTable, $idHash;

    public $image, $name, $rating, $contentCount, $created_at, $avatar, $full_name;

    public $description, $will_learn, $must_have;

    public $reviews, $sections, $check_register;

    public function mount($id)
    {

        $this->idHash = $id;
        $this->idTable = Hashids::decodeHex($id);
        $course = Course::find($this->idTable);

        if ($course) {
            $this->subtitle = $course->name;

            $this->image = $course->image;
            $this->name = $course->name;
            $this->rating = $course->rating;
            $this->contentCount = $course->contentCount();
            $this->created_at = $course->created_at;
            $this->avatar = $course->user->avatar;
            $this->full_name = $course->user->full_name;

            $this->description = $course->description;
            $this->will_learn = $course->will_learn;
            $this->must_have = $course->must_have;

            $this->sections = $course->sections;

            $this->reviews = $course->reviews;
        } else {
            redirect()->route('client.home');
        }
    }

    public function loadData()
    {
        $course = Course::find($this->idTable);

        if ($course) {
            $this->subtitle = $course->name;

            $this->image = $course->image;
            $this->name = $course->name;
            $this->rating = $course->rating;
            $this->contentCount = $course->contentCount();
            $this->created_at = $course->created_at;
            $this->avatar = $course->user->avatar;
            $this->full_name = $course->user->full_name;

            $this->description = $course->description;
            $this->will_learn = $course->will_learn;
            $this->must_have = $course->must_have;

            $this->sections = $course->sections;

            $this->reviews = $course->reviews;
        } else {
            redirect()->route('client.home');
        }
    }

    public $comment, $scores;


    /* A validation rule for the form. */
    protected $rules = [
        'comment' => 'string|nullable',
        'scores' => 'required|numeric|integer|min:1|max:5'
    ];

    /* For the validation error message. */
    protected $attributes = [
        'comment' => 'ความคิดเห็น',
        'scores' => 'คะแนน',
    ];

    protected $messages = [
        'required' => 'โปรดระบุข้อมูล :attribute',
        'max' => [
            'numeric' => ':attribute ต้องไม่เกิน :max',
            'string' => ':attribute ต้องไม่เกิน :max อักขระ',
        ],
        'numeric' => ':attribute ต้องเป็นตัวเลข',
        'integer' => ':attribute ต้องเป็นจำนวนเต็ม',
        'min' => [
            'numeric' => ':attribute ต้องมีความยาวอย่างน้อย :min',
            'string' =>  ':attribute ต้องมีอักขระอย่างน้อย :min',
        ],
    ];

    public function submit_review()
    {
        $validatedData = $this->validate($this->rules, $this->messages, $this->attributes);
        try {
            $validatedData['course_id'] = $this->idTable;
            Review::create($validatedData);
            $this->emit('success_review');
            $this->reset('comment', 'scores');
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
