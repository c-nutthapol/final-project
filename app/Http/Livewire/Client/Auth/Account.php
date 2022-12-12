<?php

namespace App\Http\Livewire\Client\Auth;

use App\Models\User;
use Exception;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class Account extends Component
{
    use LivewireAlert, WithFileUploads;

    public $user_id;

    public function mount()
    {
        $user = auth()->user();
        $this->user_id = $user->id;
        $this->avatar_temp = $user->avatar;
        $this->email = $user->email;
        $this->username = $user->username;
        $this->first_name = $user->first_name;
        $this->last_name = $user->last_name;
    }

    public function render()
    {
        return view('livewire.client.auth.account');
    }

    public $avatar, $avatar_temp;

    public $email, $username, $first_name, $last_name, $password, $password_confirm;

    protected $rules = [
        'first_name' => 'required|max:100',
        'last_name' => 'required|max:100',
        'password' => 'nullable|min:8',
        'password_confirm' => 'same:password',
        'avatar' => 'image|nullable'
    ];

    protected $attributes = [
        'username' => 'ชื่อผู้ใช้',
        'first_name' => 'ชื่อ',
        'last_name' => 'นามสกุล',
        'password' => 'รหัสผ่าน',
        'password_confirm' => 'ยืนยันรหัสผ่าน',
        'avatar' => 'รูปภาพ'
    ];

    protected $messages = [
        'required' => 'โปรดกรอกข้อมูล :attribute',
        'max' => ':attribute ต้องไม่เกิน :max อักขระ',
        'min' => ':attribute ต้องมีอักขระอย่างน้อย :min',
        'same' => ':attribute และ :other ต้องตรงกัน',
        'image' => ':attribute ต้องเป็นรูปภาพ'
    ];

    public function submit()
    {
        $validatedData = $this->validate($this->rules, $this->messages, $this->attributes);
        try {
            $user = User::find(auth()->user()->id);
            if (!empty($validatedData['avatar'])) {
                $user->avatar = $this->avatar->store('public/account/' . md5(auth()->user()->id));
            }
            if (!empty($validatedData['password'])) {
                $user->password = $validatedData['password'];
            }
            $user->first_name = $validatedData['first_name'];
            $user->last_name = $validatedData['last_name'];
            $user->save();
            $this->alert('success', 'บันทึกเสร็จสิ้น', [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
                'timerProgressBar' => true,
                'showDenyButton' => false,
                'onDenied' => '',
            ]);
        } catch (Exception $e) {
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
