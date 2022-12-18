<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
// use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use  HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */


    protected $fillable = [
        'username',
        'password',
        'first_name',
        'last_name',
        'avatar',
        'level',
        'email'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];


    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    /**
     * Always encrypt the password when it is updated.
     *
     * @param $value
     * @return string
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    /**
     * > This function returns a collection of courses that the user is a lecturer of
     *
     * @return A collection of courses that the user is a lecturer of.
     */
    public function lecturers()
    {
        return $this->belongsToMany(Course::class, 'courses_lecturers', 'user_id', 'course_id');
    }

    /**
     * The students() function returns a collection of all the courses that the user is enrolled in
     *
     * @return A collection of courses that the user is enrolled in.
     */
    public function students()
    {
        return $this->belongsToMany(Course::class, 'courses_students', 'user_id', 'course_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'created_by');
    }
}
