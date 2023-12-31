<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = 'activities';
    use HasFactory;
    public function kids()
    {
        return $this->belongsToMany(Kid::class)->withTimestamps();
    }
}
