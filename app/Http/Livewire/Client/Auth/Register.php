<?php

namespace App\Http\Livewire\Client\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
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


    public $username = 'usertest', $password = 'P@ssw0rd', $email = 'usertest@gmail.com', $first_name = 'user', $last_name = 'test', $password_confirm = 'P@ssw0rd';

    protected $rules = [
        'username' => 'required|max:100|unique:users,username',
        'first_name' => 'required|max:100',
        'last_name' => 'required|max:100',
        'email' => 'required|email:rfc,dns|unique:users,email',
        'password' => 'required|min:8',
        'password_confirm' => 'same:password|required'
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
        'max' => 'ตัวอักษรต้องไม่เกิน :max',
        'same' => ':attribute และ :other ต้องตรงกัน',
        'unique' => ':attribute ได้ถูกนำไปใช้แล้ว'
    ];
    public function submit()
    {
        $validatedData = $this->validate($this->rules, $this->messages, $this->attributes);
        try {
            $user = User::create($validatedData);
            if ($user) {
                Auth::login($user);
                return redirect()->route('client.home');
            } else {
                $this->alert('warning', 'การลงทะเบียนล้มเหลว', [
                    'position' => 'top-end',
                    'timer' => 3000,
                    'toast' => true,
                    'timerProgressBar' => true,
                    'showDenyButton' => false,
                    'onDenied' => '',
                ]);
            };
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

    public function googleRedirect()
    {
        return redirect(Socialite::driver('google')->redirect()->getTargetUrl());
    }
}
