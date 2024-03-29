<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Vinkla\Hashids\Facades\Hashids;

class Course extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    protected $casts = [
        'will_learn' => 'object',
        'must_have' => 'object'
    ];

    protected static function boot()
    {
        parent::boot();

        /* A method that is called when the model is being created. */
        static::creating(function ($model) {
            $model->created_by = auth()->check() ? auth()->user()->id : null;
            $model->updated_by = auth()->check() ? auth()->user()->id : null;
        });

        /* Attaching the user who created the course to the course as a lecturer. */
        static::created(function ($model) {
            auth()->check() ? $model->lecturers()->attach(auth()->user()->id) : null;
        });

        /* A method that is called when the model is being updated. */
        static::updating(function ($model) {
            $model->updated_by = auth()->check() ? auth()->user()->id : null;
        });

        /* A method that is called when the model is being deleted. */
        static::deleting(function ($model) {
            $model->deleted_by = auth()->check() ? auth()->user()->id : null;
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    /**
     * The `sub_category()` function returns the sub category that belongs to the product
     *
     * @return The sub_category() method returns the sub_category that belongs to the product.
     */
    public function sub_category()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id');
    }

    /**
     * The reviews() function returns all the reviews that belong to the course
     *
     * @return A collection of reviews that belong to the course.
     */
    public function reviews()
    {
        return $this->hasMany(Review::class, 'course_id');
    }


    public function sections()
    {
        return $this->hasMany(Section::class, 'course_id');
    }

    public function contentCount()
    {
        $count = 0;
        foreach ($this->sections as $section) {
            $count += $section->episodes->count();
        }
        return $count;
    }


    /**
     * This course belongs to many lecturers, and the relationship is defined by the courses_lecturers table, where the
     * course_id is the foreign key and the user_id is the local key.
     *
     * @return A collection of users that are lecturers for the course.
     */
    public function lecturers()
    {
        return $this->belongsToMany(User::class, 'courses_lecturers', 'course_id', 'user_id')->withTimestamps();
    }

    /**
     * The function students() returns a collection of users who are students in the course
     *
     * @return A collection of users that are students of the course.
     */
    public function students()
    {
        return $this->belongsToMany(User::class, 'courses_students', 'course_id', 'user_id')->withTimestamps();
    }

    public function check_register()
    {
        if (auth()->check()) {
            return $this->students()->where('user_id', auth()->user()->id)->first();
        } else {
            return false;
        }
    }


    /**
     * It encodes the id of the model into a hashid.
     *
     * @return The id of the model is being returned.
     */
    public function getEncodeAttribute()
    {
        return Hashids::encodeHex("{$this->id}");
    }

    /**
     * It returns the average of the scores column in the reviews table.
     *
     * @return The average of the scores column in the reviews table.
     */
    public function getRatingAttribute()
    {
        return number_format($this->reviews()->avg('scores'), 1, '.', '');
    }

    /**
     * This function displays data severity level information in Thai language format.
     *
     * @return entry, moderate, high, not specified
     */
    public function getLevelThAttribute()
    {
        if ($this->level == 'entry')
            return 'ระดับเริ่มต้น';
        if ($this->level == 'moderate')
            return 'ระดับปานกลาง';
        if ($this->level == 'high')
            return 'ระดับสูง';

        return 'ไม่ระบุ';
    }

    /* A getter method. It is used to get the value of the attribute `post_status` and return it in a different format. */
    public function getStatusPostAttribute()
    {
        if ($this->post_status == 'private')
            return '<span
            class="bg-secondary-80/20 text-secondary text-xs font-semibold capitalize px-2.5 py-0.5 rounded tracking-wide">
            private
        </span>';
        if ($this->post_status == 'public')
            return '<span
            class="bg-success/10 text-success text-xs font-semibold capitalize px-2.5 py-0.5 rounded tracking-wide">
            public
        </span>';
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
