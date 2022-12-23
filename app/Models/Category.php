<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();
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
