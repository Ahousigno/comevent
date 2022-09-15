<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presentateur extends Model
{
    use HasFactory;

    protected $table = 'presentateurs';

    protected $guarded = ['id'];
}