<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestLecturer extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        /* A way to add a created_by and updated_by field to the model. */
        static::creating(function ($model) {
            $model->created_by = auth()->check() ? auth()->user()->id : null;
        });

        /* Adding the user id to the updated_by field. */
        static::updating(function ($model) {
            $model->updated_by = auth()->check() ? auth()->user()->id : null;
        });
    }
}
