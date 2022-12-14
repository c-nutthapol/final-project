<?php

namespace App\Http\Livewire\Client\Teacher;

use App\Models\Category;
use Livewire\Component;

class Filters extends Component
{
    public function render()
    {
        $this->requestSearch();
        $categories = Category::get();
        return view('livewire.client.teacher.filters', compact('categories'));
    }

    /* Declaring the variables that will be used in the component. */
    public $search, $category, $sort = 'desc', $level = ['high', 'moderate', 'entry'], $reviewScore = '>=4', $status = ['private', 'public'];


    /**
     * > This function returns an array of strings if the boolean value is true, otherwise it returns an empty array
     *
     * @param bool value true or false
     *
     * @return The level array is being returned.
     */
    public function allLevel(bool $value)
    {
        if ($value)
            return $this->reset('level');

        return $this->level = [];
    }

    /**
     * > This function is used to search for a specific item in the database
     */
    public function requestSearch()
    {
        $search = $this->search;
        $category = $this->category;
        $sort = $this->sort;
        $level = $this->level;
        $reviewScore = $this->reviewScore;
        $status = $this->status;

        $this->emit('search', compact('search', 'category', 'sort', 'level', 'reviewScore', 'status'));
    }
}
