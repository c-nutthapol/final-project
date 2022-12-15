<?php

namespace App\Http\Livewire\Client\Teacher\Course\Manages;

use App\Models\Category;
use App\Models\Course;
use App\Models\SubCategory;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;
use Vinkla\Hashids\Facades\Hashids;

class Overview extends Component
{
    use WithFileUploads, LivewireAlert;

    public function render()
    {
        /* Getting all the categories from the database. */
        $categories = Category::get();
        /* Getting all the sub categories that belongs to the category that the user selected. */
        $sub_categories = SubCategory::where('category_id', $this->category)->get();
        return view('livewire.client.teacher.course.manages.overview', compact('categories', 'sub_categories'));
    }

    public $subtitle, $idTable, $idHash;

    public function mount($id)
    {
        $this->idHash = $id;
        $this->idTable = Hashids::decodeHex($id);
        $record = Course::find($this->idTable);
        if ($record) {
            /* Setting the subtitle to the name of the course. */
            $this->subtitle = $record->name;

            /* Setting the value of the input fields to the value of the record. */
            $this->name = $record->name;
            $this->category = $record->sub_category->category->id;
            $this->sub_category = $record->sub_category->id;
            $this->level = $record->level;
            $this->description = $record->description;
            $this->video_temp = $record->video;
            $this->image_temp = $record->image;
        }
    }

    public $image_temp, $video_temp;

    /* Declaring the variables that will be used in the component. */
    public $name, $category, $sub_category, $level, $description, $video, $image;

    public function submit()
    {
    }
}
