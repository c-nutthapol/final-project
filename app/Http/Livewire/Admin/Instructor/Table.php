<?php

namespace App\Http\Livewire\Admin\Instructor;

use App\Models\RequestLecturer;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Table extends Component
{
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

    }
}
