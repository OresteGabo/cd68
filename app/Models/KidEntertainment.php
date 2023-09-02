<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KidEntertainment extends Model
{
    protected $table = 'kid_entertainment';
    use HasFactory;
    public function kid()
    {
        return $this->belongsTo(Kid::class);
    }

    public function entertainment()
    {
        return $this->belongsTo(Entertainment::class);
    }
}
