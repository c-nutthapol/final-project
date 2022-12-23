<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();
    }

    /**
     * The `category()` function returns the category that the post belongs to
     *
     * @return The category that the post belongs to.
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
