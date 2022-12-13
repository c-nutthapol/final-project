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
            $model->deleted_by = auth()->check() ? auth()->user()->id : null;
        });
    }

    public function getEncodeAttribute()
    {
        return Hashids::encodeHex($this->id);
    }

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

    public function getCreatedAtAttribute($str)
    {
        return thaidate('h:i j M Y', $str);
    }
}
