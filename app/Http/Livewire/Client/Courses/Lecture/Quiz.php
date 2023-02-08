<?php

namespace App\Http\Livewire\Client\Courses\Lecture;

use App\Models\QuizResult;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Vinkla\Hashids\Facades\Hashids;

class Quiz extends Component
{
    use LivewireAlert;

    public function render()
    {
        $this->checkReply();
        $this->getQuiz(Hashids::decodeHex($this->q));
        return view('livewire.client.courses.lecture.quiz');
    }

    public $quiz, $questions, $quest_length, $q;

    protected $queryString = ['q'];

    public $status = 'not_done';

    public function mount($quz)
    {
        $this->quiz = $quz;

        $this->questions = $quz->questions;

        $this->quest_length = $quz->amount;
        $this->getAnswer();
    }

    public $answer_scores, $answer_max;

    public function getAnswer()
    {
        $reply = QuizResult::where('quiz_id', $this->quiz->id)->where('created_by', auth()->user()->id)->orderBy('created_at', 'DESC')->first();
        if ($reply) {
            $this->status = 'done';
            $this->answer_scores = $reply->result_scores;
        }
    }

    public $key, $title, $choices;
    public function getQuiz($q = null)
    {
        $questions = collect($this->questions);
        $question = [];
        if ($q == null || $q == "") {
            $question =  (array) $questions->first();
            $this->key = $questions->keys()->first();
        } else {
            $question = (array) $questions->get($q);
            $this->key = $q;
        }
        $this->title = $question['title'];
        $this->choices = (array) $question['choice'];
    }

    public $reply = [], $sent_reply = false, $unanswered = [], $result_scores;

    public function checkReply()
    {
        $questions = (array) $this->questions;
        $unanswered = collect($this->questions)->keys()->toArray();
        $count = 0;
        $scores = 0;
        foreach ($questions as $key => $question) {
            $question = (array) $question;

            if (!empty($question['reply'])) {
                unset($unanswered[$key]);
                if ($question['reply'] == $question['answer']) {
                    $scores++;
                }
                $count++;
            }
        }
        $this->unanswered = $unanswered;
        $this->result_scores = $scores;
        if ($this->quest_length == $count) {
            $this->sent_reply = true;
        } else {
            $this->sent_reply = false;
        }
    }

    public function submit()
    {
        try {
            $data['quiz_id'] = $this->quiz->id;
            $data['result_questions'] = $this->questions;
            $data['result_scores'] = $this->result_scores;
            QuizResult::create($data);
            $this->getAnswer();
            $this->alert('success', 'บันทึกเสร็จสิ้น', [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
                'showDenyButton' => false,
                'onDenied' => '',
            ]);
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
}
