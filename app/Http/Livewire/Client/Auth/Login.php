<?php

namespace App\Http\Livewire\Client\Auth;

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

    public $usernameOrEmail = 'usertest', $password = 'P@ssw0rd';

    protected $rules = [
        'usernameOrEmail' => 'required|max:100',
        'password' => 'required|min:8'
    ];

    protected $attributes = [
        'usernameOrEmail' => 'ชื่อผู้ใช้ หรือ อีเมล',
        'password' => 'รหัสผ่าน',
    ];

    protected $messages = [
        'required' => 'โปรดกรอกข้อมูล :attribute',
        'max' => ':attribute ต้องไม่เกิน :max อักขระ',
        'min' => ':attribute ต้องมีอักขระอย่างน้อย :min',
    ];

    public function submit()
    {
        $validatedData = $this->validate($this->rules, $this->messages, $this->attributes);
        if (auth()->attempt(['username' => $validatedData['usernameOrEmail'], 'password' => $validatedData['password']]) || auth()->attempt(['email' => $validatedData['usernameOrEmail'], 'password' => $validatedData['password']])) {
            return redirect()->route('client.home');
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

    public function googleRedirect()
    {
        return redirect(Socialite::driver('google')->redirect()->getTargetUrl());
    }
}
