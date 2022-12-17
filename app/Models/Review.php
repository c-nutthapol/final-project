<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        /* This is a model event. It is called when a model is being created. */
        static::creating(function ($model) {
            $model->created_by = auth()->check() ? auth()->user()->id : null;
        });
    }

    /**
     * The `course()` function returns the course that the student is enrolled in
     *
     * @return A collection of all the questions for the course.
     */
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    /**
     * > This function returns the user who created the post
     *
     * @return A collection of all the users that have created a post.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    /**
     * It converts the date format to Thai date format.
     *
     * @param str The date string to be converted.
     */
    public function getCreatedAtAttribute($str)
    {
        return thaidate('j M Y H:i', $str);
    }
}
