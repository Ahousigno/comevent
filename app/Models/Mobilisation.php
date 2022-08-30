<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobilisation extends Model
{
    use HasFactory;

    protected $table = 'mobilisations';

    protected $guarded = ['id'];
}