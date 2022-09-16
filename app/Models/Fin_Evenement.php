<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fin_Evenement extends Model
{
    use HasFactory;

    protected $fillable = [
        'lettre_remerciements',
        'rapport',
        'articles',
        'medias',
        'lien_event',
        'event_id',
    ];
}
