<?php

namespace App\Http\Livewire\Client\Auth\Courses;

use App\Models\Certificate;
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

    public $exam, $exam_success;

    public $description, $will_learn, $must_have;

    public $reviews, $sections, $check_register;

    public $certificate_url;

    public function mount($id)
    {

        $this->idHash = $id;
        $this->idTable = Hashids::decodeHex($id);
        $course = Course::find($this->idTable);

        if ($course) {
            $this->subtitle = $course->name;

            $this->exam = 0;
            $this->exam_success = 0;
            foreach ($course->sections as $section) {
                $this->exam += $section->quizzes->count();
                foreach ($section->quizzes as $quiz) {
                    $this->exam_success += $quiz->check_user_answered() ? 1 : 0;
                }
            }
            $this->exam_success = $this->exam_success ? ($this->exam_success / $this->exam) * 100 : 0;


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

            $certificate = Certificate::where('course_id', $course->id)->where('user_id', auth()->user()->id)->first();
            if ($certificate) {
                $this->certificate_url = route('client.auth.courses.certificate', $certificate->encode);
            }
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

    public function getCertificate()
    {
        $course = Course::find($this->idTable);
        $user_id = auth()->user()->id;
        foreach ($course->sections as $section) {
            $amount = $section->quizzes->sum('amount');
            $scores = 0;
            foreach ($section->quizzes as $quiz) {
                $scores += $quiz->quiz_result()->where('created_by', $user_id)->sum('result_scores');
            }
        }

        if (($scores * 100) / $amount > 70 && $this->exam_success == 100) {

            $data = [
                'course_id' => $course->id,
                'user_id' => $user_id,
                'issue_date' => date('Y-m-d')
            ];
            $create = Certificate::create($data);
            if ($create) {
                $this->certificate_url = route('client.auth.courses.certificate', $create->encode);
            }
            $this->alert('success', 'ออกเกียรติบัตรได้แล้ว', [
                'position' => 'center',
                'text' => 'คลิกอีกครั้งเพื่อเข้าหน้าเกียรติบัตร',
                'timer' => 3000,
                'toast' => false,
                'showCancelButton' => false,
                'onDismissed' => '',
                'showConfirmButton' => true,
                'onConfirmed' => '',
            ]);
        } else {
            $this->alert('warning', 'ไม่สามารถออกเกียรติบัตรได้', [
                'position' => 'center',
                'text' => 'คะแนนทั้งหมดต้องได้มากกว่า 70% ขึ้นไป และต้องทำแบบทดสอบทั้งหมด',
                'timer' => 3000,
                'toast' => false,
                'showCancelButton' => false,
                'onDismissed' => '',
                'showConfirmButton' => true,
                'onConfirmed' => '',
            ]);
        }
    }
}
