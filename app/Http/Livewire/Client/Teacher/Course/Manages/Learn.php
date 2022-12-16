<?php

namespace App\Http\Livewire\Client\Teacher\Course\Manages;

use App\Models\Course;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;
use Vinkla\Hashids\Facades\Hashids;

class Learn extends Component
{
    use LivewireAlert, WithPagination;

    protected $listeners = [
        'destroy'
    ];

    public function render()
    {
        $course = Course::find($this->idTable);
        $willLearn = $this->paginate($course->will_learn, $this->search);
        return view('livewire.client.teacher.course.manages.learn', compact('willLearn'));
    }

    public $subtitle, $idTable, $idHash, $search;

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

    public function store($name)
    {
        try {
            $update = Course::find($this->idTable);
            $data = Collection::make($update->will_learn);
            $count = $data->count();
            $key = $count > 0 ? $count - 1 : 0;
            $data->push(['id' => (empty($data[$key]) ? 1 : 1 + $data[$key]->id), 'name' => $name]);

            $update->will_learn = $data->toArray();
            $update->save();
            $this->gotoPage(1);
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

    public function update($id, $name)
    {
        try {
            $update = Course::find($this->idTable);
            $data = Collection::make($update->will_learn);
            $data->where('id', '=', $id)->each(function ($list, $key) use ($data, $name) {
                $data->put($key, (object) ['id' => $list->id, 'name' => $name]);
            });
            $update->will_learn = $data->toArray();
            $update->save();
            return  $this->alert('success', 'บันทึกเสร็จสิ้น', [
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
        $update = Course::find($this->idTable);
        $data = Collection::make($update->will_learn);
        $data->where('id', '=', $id)->each(function ($list, $key) use ($data) {
            $data->offsetUnset($key);
        });
        $update->will_learn = $data->toArray();
        return  $update->save();
    }

    private function paginate($items = [], $search = null, $perPage = 5, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
}
