<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotesse extends Model
{
    use HasFactory;
    protected $table = 'hotesses';
    protected $guarded = ['id'];
}