<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Vinkla\Hashids\Facades\Hashids;

class Quiz extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'questions' => 'object',
    ];

    protected static function boot()
    {
        parent::boot();

        /* A boot method that is called when a model is created. */
        static::creating(function ($model) {
            $model->created_by = auth()->check() ? auth()->user()->id : null;
            $model->updated_by = auth()->check() ? auth()->user()->id : null;
        });

        /* Updating the updated_by field with the user id of the user who is updating the record. */
        static::updating(function ($model) {
            $model->updated_by = auth()->check() ? auth()->user()->id : null;
        });

        /* Updating the deleted_by field with the user id of the user who is deleting the record. */
        static::deleting(function ($model) {
            $model->deleted_by = auth()->check() ? auth()->user()->id : null;
        });
    }

    public function getEncodeAttribute()
    {
        return Hashids::encodeHex($this->id);
    }

    public function quiz_result()
    {
        return $this->hasMany(QuizResult::class, 'quiz_id', 'id');
    }

    public function check_user_answered()
    {
        return $this->quiz_result->where('created_by', auth()->user()->id)->count();
    }
}
