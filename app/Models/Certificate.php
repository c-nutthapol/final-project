<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Vinkla\Hashids\Facades\Hashids;

class Certificate extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getEncodeAttribute()
    {
        return Hashids::encodeHex($this->id);
    }
}
