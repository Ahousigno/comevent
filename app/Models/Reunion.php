<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reunion extends Model
{
    use HasFactory;

    protected $fillable = [
        'ordre_jour',
        'date_reunion',
        'heure_debut',
        'heure_fin',
        'canal',
        'lien_reunion',
        'event_id',
            
    ];
}
