<?php

namespace App\Http\Livewire\Admin\Instructor;

use App\Models\RequestLecturer;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Table extends Component
{
    use LivewireAlert;

    public $status, $sort = 'desc', $search;

    public function render()
    {
        $requests = RequestLecturer::query()
            ->when(!empty($this->search), function ($query) {
                $query->whereHas('user', function ($query) {
                    $query->where('fname', 'link', '%' . $this->search . '%');
                    $query->orWhere('lname', 'link', '%' . $this->search . '%');
                    $query->orWhere(DB::raw('concat(fname," ",lname)'), 'link', '%' . $this->search . '%');
                });
            })
            ->when(!empty($this->status), function ($query) {
                if ($this->status == 'pending') {
                    $query->where('status', '0');
                } elseif ($this->status == 'approve') {
                    $query->where('status', '111');
                } elseif ($this->status == 'refuse') {
                    $query->whereNotIn('status', ['111', '0']);
                }
            })
            ->orderBy('created_at', $this->sort)->paginate(5);
        return view('livewire.admin.instructor.table', compact('requests'));
    }

    public function update($id,$data){
        try {
            $update = RequestLecturer::find($id);
            if($update){
                $update->status = $data['status'];
                $update->description = $data['description'];
                if($update->status == '111'){
                    $update->user->level = 'lecturer';
                    $update->user->save();
                }
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

    public function getInstructor($id){
        $record = RequestLecturer::find($id);
        if($record){
            $data = [
                'id' => $id,
                'record' => $record->record,
                'experience' => $record->experience,
                'target_audience' => $record->target_audience,
                'full_name' => $record->user->full_name,
                'avatar' => Storage::disk('public')->url($record->user->avatar),
            ];


            return $data;
        }
    }
}
