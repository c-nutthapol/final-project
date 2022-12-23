<?php

namespace App\Http\Livewire\Client\Auth;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Login extends Component
{
    use LivewireAlert;

    public function render()
    {
        return view('livewire.client.auth.login');
    }

    public $redirect;

    public function mount($redirect = null)
    {
        $this->redirect = $redirect;
    }
    /* It's a default value for the form. */
    public $usernameOrEmail = 'usertest', $password = 'P@ssw0rd';

    /* A validation rule for the form. */
    protected $rules = [
        'usernameOrEmail' => 'required|max:100',
        'password' => 'required|min:8'
    ];

    /* For the validation error message. */
    protected $attributes = [
        'usernameOrEmail' => 'ชื่อผู้ใช้ หรือ อีเมล',
        'password' => 'รหัสผ่าน',
    ];

    protected $messages = [
        'required' => 'โปรดระบุข้อมูล :attribute',
        'max' => ':attribute ต้องไม่เกิน :max อักขระ',
        'min' => ':attribute ต้องมีอักขระอย่างน้อย :min',
    ];

    /* It's a function that will be called when the user clicks the submit button. */
    public function submit()
    {
        $validatedData = $this->validate($this->rules, $this->messages, $this->attributes);
        /* It's a function that will be called when the user clicks the submit button. */
        if (auth()->attempt(['username' => $validatedData['usernameOrEmail'], 'password' => $validatedData['password']]) || auth()->attempt(['email' => $validatedData['usernameOrEmail'], 'password' => $validatedData['password']])) {
            if (!empty($this->redirect)) {
                return redirect()->to($this->redirect);
            } else {
                return redirect()->route('client.home');
            }
        } else {
            $this->alert('error', 'ชื่อผู้ใช้ อีเมล หรือรหัสผ่านไม่ถูกต้อง', [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
                'showDenyButton' => false,
                'onDenied' => '',
            ]);
        }
    }

    /* It's a function that will be called when the user clicks the Google button. */
    public function googleRedirect()
    {
        return redirect(Socialite::driver('google')->redirect()->getTargetUrl());
    }
}
