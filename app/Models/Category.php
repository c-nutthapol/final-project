<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
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

    /**
     * The `sub_categories()` function returns all the sub categories that belong to a category
     *
     * @return A collection of SubCategory objects.
     */
    public function sub_categories()
    {
        return $this->hasMany(SubCategory::class, 'category_id', 'id');
    }
}
