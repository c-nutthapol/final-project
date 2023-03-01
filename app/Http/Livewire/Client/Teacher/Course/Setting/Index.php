<?php

namespace App\Http\Livewire\Client\Teacher\Course\Setting;

use App\Models\Course;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Vinkla\Hashids\Facades\Hashids;

class Index extends Component
{
    use LivewireAlert;

    protected $listeners = [
        'destroy'
    ];

    public function render()
    {
        $lecturers = Course::find($this->idTable)->lecturers ?? [];
        return view('livewire.client.teacher.course.setting.index', compact('lecturers'));
    }

    public $subtitle, $idTable, $idHash, $status, $avatar;

    public function mount($id)
    {
        $this->idHash = $id;
        $this->idTable = Hashids::decodeHex($id);
        $record = Course::find($this->idTable);
        if ($record) {
            /* Setting the subtitle to the name of the course. */
            $this->subtitle = $record->name;
            $this->post_status = $record->post_status == 'public' ? true : false;
            $this->status = $record->status;
            $this->full_name = $record->user->full_name;
            $this->avatar = $record->avatar;
            $this->created_by = $record->created_by;
        }
    }

    public $post_status, $full_name, $created_by;

    public function changePostStatus(bool $value)
    {
        try {
            $update = Course::find($this->idTable);
            if ($value) {
                $update->post_status = 'public';
            } else {
                $update->post_status = 'private';
            }
            $update->save();
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

    public function destroyConfirm($name)
    {
        $this->alert('warning', 'คุณต้องการจะลบ ' . $name . ' ?', [
            'position' => 'center',
            'timer' => null,
            'toast' => false,
            'showCancelButton' => true,
            'onDismissed' => '',
            'showConfirmButton' => true,
            'onConfirmed' => 'destroy',
            'cancelButtonText' => 'ยกเลิก',
            'confirmButtonText' => 'ตกลง',
        ]);
    }

    public function destroy()
    {
        $update = Course::find($this->idTable);
        $update->delete();
        return  redirect()->route('client.teacher.all');
    }
}
