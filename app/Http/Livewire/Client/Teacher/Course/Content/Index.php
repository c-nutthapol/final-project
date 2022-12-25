<?php

namespace App\Http\Livewire\Client\Teacher\Course\Content;

use App\Models\Course;
use App\Models\Section;
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
        $sections = Section::get();
        return view('livewire.client.teacher.course.content.index', compact('sections'));
    }

    public $subtitle, $idTable, $idHash, $score = 'all';

    public function mount($id)
    {
        $this->idHash = $id;
        $this->idTable = Hashids::decodeHex($id);
        $record = Course::find($this->idTable);
        if ($record) {
            /* Setting the subtitle to the name of the course. */
            $this->subtitle = $record->name;
        }
    }

    public function create(string $name)
    {
        try {
            Section::create(['course_id' => $this->idTable, 'name' => $name]);
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

    public function update(int $id, string $name)
    {
        try {
            $update = Section::find($id);
            if ($update) {
                $update->name = $name;
                $update->save();
                $this->alert('success', 'บันทึกเสร็จสิ้น', [
                    'position' => 'top-end',
                    'timer' => 3000,
                    'toast' => true,
                    'timerProgressBar' => true,
                    'showDenyButton' => false,
                    'onDenied' => '',
                ]);
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

    public function destroyConfirm($id, $name)
    {
        $this->alert('warning', 'คุณต้องการจะลบ ' . $name . ' ?', [
            'position' => 'center',
            'timer' => null,
            'toast' => false,
            'showCancelButton' => true,
            'onDismissed' => '',
            'showConfirmButton' => true,
            'data' => [$id],
            'onConfirmed' => 'destroy',
            'cancelButtonText' => 'ยกเลิก',
            'confirmButtonText' => 'ตกลง',
        ]);
    }

    public function destroy($res)
    {
        $id = $res['data'][0];
        return  Section::find($id)->delete();
    }
}
