<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entertainment extends Model
{
    use HasFactory;
    public function kidentertainments()
    {
        return $this->hasMany(KidEntertainment::class);
    }

    public function kids()
    {
        return $this->belongsToMany(Kid::class, 'kidentertainments');
    }
}
