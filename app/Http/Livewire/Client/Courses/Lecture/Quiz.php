<?php

namespace App\Http\Livewire\Client\Courses\Lecture;

use App\Models\Quiz as ModelsQuiz;
use Livewire\Component;
use Vinkla\Hashids\Facades\Hashids;

class Quiz extends Component
{
    public function render()
    {
        $this->checkReply();
        $this->getQuiz(Hashids::decodeHex($this->q));
        return view('livewire.client.courses.lecture.quiz');
    }

    public $quiz, $questions, $quest_length, $q;

    protected $queryString = ['q'];

    public function mount($quz)
    {
        $this->quiz = $quz;

        $this->questions = $quz->questions;

        $this->quest_length = collect($quz->questions)->count();
    }

    public $key, $title, $choices;
    public function getQuiz($q = null)
    {
        $questions = collect($this->questions);
        $question = [];
        if ($q == null || $q == "") {
            $question = (array) $questions->first();
            $this->key = $questions->keys()->first();
        } else {
            $question = (array) $questions->get($q);
            $this->key = $q;
        }
        $this->title = $question['title'];
        $this->choices = (array) $question['choice'];
    }

    public $reply = [], $sent_reply = false, $unanswered = [];

    public function checkReply()
    {
        $count = collect($this->reply)->count();
        $questions = collect($this->questions)->keys()->toArray();

        $unanswered = collect($questions)->keys()->toArray();
        foreach ($this->reply as $key => $reply) {
            if (in_array($key, $questions)) {
                unset($unanswered[$key]);
            }
        }
        $this->unanswered = $unanswered;

        if ($this->quest_length == $count) {
            $this->sent_reply = true;
        } else {
            $this->sent_reply = false;
        }
    }
}
