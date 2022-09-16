<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album_Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'photo'
    ];

}
