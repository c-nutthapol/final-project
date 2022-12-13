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

    /* A variable that is used to store the user id. */
    public $user_id;

    public function mount()
    {
        /* Used to get the user's data. */
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

    /* A variable that is used to store the user's data. */
    public $email, $username, $first_name, $last_name, $password, $password_confirm, $avatar, $avatar_temp;

    /* A validation rule for the form. */
    protected $rules = [
        'first_name' => 'required|max:100',
        'last_name' => 'required|max:100',
        'password' => 'nullable|min:8',
        'password_confirm' => 'same:password',
        'avatar' => 'image|nullable'
    ];

    /* For the validation error message. */
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

    /* A function that is called when the submit button is clicked. */
    public function submit()
    {
        $validatedData = $this->validate($this->rules, $this->messages, $this->attributes);
        try {
            /* Used to update the user's data. */
            $user = User::find(auth()->user()->id);
            /* Used to check if the avatar is empty or not. If it is not empty, it will be updated. */
            if (!empty($validatedData['avatar'])) {
                $user->avatar = $this->avatar->store('public/account/' . md5(auth()->user()->id));
            }
            /* Used to check if the password is empty or not. If it is not empty, it will be updated. */
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
