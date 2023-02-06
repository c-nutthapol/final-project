<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Vinkla\Hashids\Facades\Hashids;

class Section extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->created_by = auth()->check() ? auth()->user()->id : null;
            $model->updated_by = auth()->check() ? auth()->user()->id : null;
        });

        static::updating(function ($model) {
            $model->updated_by = auth()->check() ? auth()->user()->id : null;
        });

        static::deleting(function ($model) {
            $model->quizzes()->delete();
            foreach ($model->episodes as $ep) {
                if ($ep->video != null && Storage::exists($ep->video)) {
                    Storage::delete($ep->video);
                }
                foreach ($ep->files as $file) {
                    if (!empty($file->path) && Storage::exists($file->path)) {
                        Storage::delete($file->path);
                    }
                }
            }
            $model->episodes()->delete();
        });
    }
    public function getEncodeAttribute()
    {
        return Hashids::encodeHex($this->id);
    }

    public function quizzes()
    {
        return $this->hasMany(Quiz::class, 'section_id');
    }

    public function episodes()
    {
        return $this->hasMany(Episode::class, 'section_id');
    }
}
