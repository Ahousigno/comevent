<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avant extends Model
{
    use HasFactory;
    protected $table = 'avants';

    protected $guarded = ['id'];
}