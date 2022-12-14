<?php

namespace App\Http\Livewire\Client\Teacher;

use App\Models\Course;
use Livewire\Component;

class Courses extends Component
{
    /* This is a listener that is listening for the event `coursesRefresh` and when it is triggered, it will refresh the
    component. */
    protected $listeners = [
        'coursesRefresh' => '$refresh',
        'search' => 'resSearch'
    ];

    public function render()
    {
        $courses = $this->queryCourse();

        return view('livewire.client.teacher.courses', compact('courses'));
    }

    public $search = [];

    public function resSearch(...$res)
    {
        return $this->search = $res[0];
    }

    /**
     * > It returns all the courses created by the logged in user
     *
     * @return A collection of courses
     */
    private function queryCourse()
    {
        $user = auth()->user();
        $items = Course::query();
        $items->when(!empty($this->search), function ($query) {
            $query->when(!empty($this->search['search']), function ($query) {
                $query->where('name', 'like', '%' . $this->search['search'] . '%');
            });
            $query->when(!empty($this->search['category']), function ($query) {
                $query->whereHas('sub_category', function ($query) {
                    $query->whereHas('category', function ($query) {
                        $query->where('id', $this->search['category']);
                    });
                });
            });
            $query->whereIn('level', $this->search['level']);
            $query->when(!empty($this->search['sort']) && $this->search['sort'] != 'highReview', function ($query) {
                $query->orderBy('created_at', $this->search['sort']);
            });
            $query->when(!empty($this->search['sort']) && $this->search['sort'] == 'highReview', function ($query) {
                // $query->ordeerBy('created_at', $this->search['sort']);
            });
        });
        return $items->where('created_by', $user->id)->paginate(4);
    }
}
