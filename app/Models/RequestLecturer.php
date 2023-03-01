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
