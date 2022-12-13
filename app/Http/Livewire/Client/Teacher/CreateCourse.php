<?php

namespace App\Http\Livewire\Client\Teacher;

use App\Models\Category;
use App\Models\Course;
use App\Models\SubCategory;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class CreateCourse extends Component
{
    use LivewireAlert;

    public function render()
    {
        /* Getting all the categories from the database. */
        $categories = Category::get();
        /* Getting all the sub categories that belongs to the category that the user selected. */
        $sub_categories = SubCategory::where('category_id', $this->category)->get();
        return view('livewire.client.teacher.create-course', compact('categories', 'sub_categories'));
    }

    public $name, $category, $sub_category_id, $level;

    /* A validation rule for the form. */
    protected $rules = [
        'name' => 'required|min:8|max:100',
        'category' => 'required|exists:categories,id',
        'sub_category_id' => 'required|exists:sub_categories,id',
        'level' => 'required|in:entry,moderate,high',
    ];

    /* For the validation error message. */
    protected $attributes = [
        'name' => 'ชื่อคอร์ส',
        'category' => 'หมวดหมู่',
        'sub_category_id' => 'หมวดหมู่ย่อย',
        'level' => 'ระดับคอร์สเรียน',
    ];

    protected $messages = [
        'required' => 'โปรดกรอกข้อมูล :attribute',
        'max' => ':attribute ต้องไม่เกิน :max อักขระ',
        'min' => ':attribute ต้องมีอักขระอย่างน้อย :min',
        'same' => ':attribute และ :other ต้องตรงกัน',
        'image' => ':attribute ต้องเป็นรูปภาพ',
        'exists' => ':attribute ที่เลือกไม่ถูกต้อง'
    ];

    /* A function that will be called when the form is submitted. */
    public function submit()
    {
        $validatedData = $this->validate($this->rules, $this->messages, $this->attributes);
        try {
            Course::create(collect($validatedData)->except('category')->toArray());
            $this->alert('success', 'บันทึกเสร็จสิ้น', [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
                'showDenyButton' => false,
                'onDenied' => '',
            ]);
            $this->emit('coursesRefresh');
            $this->reset('name', 'category', 'sub_category_id', 'level');
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
