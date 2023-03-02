<?php

namespace App\Http\Livewire\Client;

use App\Models\RequestLecturer;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class InstructorForm extends Component
{
    use LivewireAlert;

    public function render()
    {
        return view('livewire.client.instructor-form');
    }

    public $textStatus = false, $textDescription = false;

    public function mount()
    {
        $record = RequestLecturer::where('created_by', auth()->user()->id)->orderBy('created_at', 'desc')->first();
        if ($record) {
            if ($record->status == 0 && $record->updated_by == null) {
                $this->textStatus = 'รอการอนุมัติ';
            }
            if ($record->status != 111 && $record->updated_by != null) {
                $this->textStatus = 'ไม่ผ่านเงื่อนไขที่กำหนด';
                $this->textDescription = $record->description;
            }
        }
    }

    public $record, $experience, $target_audience;

    protected $rules = [
        'record' => 'required|string|min:8',
        'experience' => 'required|numeric',
        'target_audience' => 'required|string|min:8|max:255',
    ];

    /* For the validation error message. */
    protected $attributes = [
        'record' => 'ประวัติการทํางานที่เกี่ยวข้อง',
        'experience' => 'ประสบการณ์การทำงานที่เกี่ยวข้อง',
        'target_audience' => 'กลุ่มเป้าหมายผู้เรียน',
    ];

    protected $messages = [
        'required' => 'โปรดระบุข้อมูล :attribute',
        'numeric' => ':attribute ต้องเป็นตัวเลข',
        'max' => [
            'string' => ':attribute ต้องไม่เกิน :max อักขระ',
        ],
        'min' => [
            'string' => ':attribute ต้องมีอักขระอย่างน้อย :min',
        ],
    ];


    public function submit()
    {
        $validatedData = $this->validate($this->rules, $this->messages, $this->attributes);
        try {
            $create = RequestLecturer::create($validatedData);

            if ($create->status == 0 && $create->updated_by == null) {
                $this->textStatus = 'รอการอนุมัติ';
            }

            $this->alert('success', 'ขอบคุณ', [
                'position' => 'center',
                'text' => 'ทางเราจะรีบประสานงาน คุณสามารถตรวจสอบผ่านเว็บไซต์ได้',
                'timer' => 3000,
                'toast' => false,
                'timerProgressBar' => true,
                'showDenyButton' => false,
                'onDenied' => '',
            ]);

            // $this->dispatchBrowserEvent('redirect_page', ['url' => route('client.instructor-form'), 'delay' => 3000]);
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
