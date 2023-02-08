<?php

namespace App\Http\Livewire\Client\Courses;

use App\Models\Course;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Vinkla\Hashids\Facades\Hashids;

class Detail extends Component
{
    use LivewireAlert;

    public function render()
    {
        return view('livewire.client.courses.detail');
    }

    public $subtitle, $idTable, $idHash;

    public $image, $name, $rating, $contentCount, $created_at, $avatar, $full_name;

    public $description, $will_learn, $must_have;

    public $reviews, $sections, $check_register;

    public function mount($id)
    {

        $this->idHash = $id;
        $this->idTable = Hashids::decodeHex($id);
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
            $this->will_learn = $course->will_learn ?? [];
            $this->must_have = $course->must_have ?? [];

            $this->sections = $course->sections;

            $this->reviews = $course->reviews;

            $this->check_register = $course->check_register();
        } else {
            redirect()->route('client.home');
        }
    }

    public function register()
    {
        $course = Course::find($this->idTable);
        if ($course) {
            $course->students()->attach(auth()->user()->id);
            $this->check_register = $course->check_register();
            return $this->alert('success', 'ลงทะเบียนเสร็จสิ้น', [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
                'showDenyButton' => false,
                'onDenied' => '',
            ]);
        }
    }
}
