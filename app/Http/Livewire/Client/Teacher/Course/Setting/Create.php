<?php

namespace App\Http\Livewire\Client\Teacher\Course\Setting;

use App\Models\Course;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Vinkla\Hashids\Facades\Hashids;

class Create extends Component
{
    use LivewireAlert;

    public function render()
    {
        $users = !empty($this->search) ? User::where(function ($query) {
            $query->where('username', 'like', '%' . $this->search);
            $query->orWhere('first_name', 'like', '%' . $this->search);
            $query->orWhere('last_name', 'like', '%' . $this->search);
            $query->orWhere('email', 'like', '%' . $this->search);
            $query->orWhere(DB::raw("concat(first_name, ' ',last_name)"), 'like', '%' . $this->search);
        })->where('level', 'lecturer')->whereNotIn('id', Course::find($this->idTable)->lecturers()->pluck('id'))->get() : [];
        return view('livewire.client.teacher.course.setting.create', compact('users'));
    }
    public $subtitle, $idTable, $idHash;

    public function mount($id)
    {
        $this->idHash = $id;
        $this->idTable = Hashids::decodeHex($id);
    }

    public $search;

    public function addLecturer($id)
    {
        try {
            $update = Course::find($this->idTable);
            $update->lecturers()->attach($id);

            return $this->alert('success', 'บันทึกเสร็จสิ้น', [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
                'showDenyButton' => false,
                'onDenied' => '',
            ]);
        } catch (\Exception $e) {
            return $this->alert('error', 'เกิดข้อผิดพลาดกรุณาลองใหม่อีกครั้ง', [
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
