<?php

namespace App\Http\Livewire\Client\Auth;

use Livewire\Component;
use Laravel\Socialite\Facades\Socialite;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Register extends Component
{
    use LivewireAlert;

    public function render()
    {
        return view('livewire.client.auth.register');
    }


    public $username, $password, $email, $first_name, $last_name, $password_confirm;

    protected $rules = [
        'username' => 'required|max:100',
        'first_name' => 'string|required|max:100',
        'last_name' => 'string|required|max:100',
        'email' => 'required|max:255',
        'password' => 'required|max:255',
        'password_confirm' => 'password|required|max:255'
    ];

    protected $attributes = [
        'username' => 'ชื่อผู้ใช้',
        'first_name' => 'ชื่อ',
        'last_name' => 'นามสกุล',
        'email' => 'อีเมล',
        'password' => 'รหัสผ่าน',
        'password_confirm' => 'ยืนยันรหัสผ่าน',
    ];

    protected $messages = [
        'required' => 'โปรดกรอกข้อมูล :attribute',
        'max' => 'ตัวอักษรต้องไม่เกิน :max'
    ];
    public function submit()
    {
        $validatedData = $this->validate($this->rules, $this->messages, $this->attributes);
        if (0) {
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
