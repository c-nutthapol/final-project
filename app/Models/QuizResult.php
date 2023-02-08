<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuizResult extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'result_questions' => 'object',
    ];

    protected static function boot()
    {
        parent::boot();

        /* A way to add a created_by and updated_by field to the model. */
        static::creating(function ($model) {
            $model->created_by = auth()->check() ? auth()->user()->id : null;
        });
    }
}
