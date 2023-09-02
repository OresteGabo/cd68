<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static findOrFail($citizenship)
 */
class Country extends Model
{
    protected $table = 'countries';
    use HasFactory;
}
