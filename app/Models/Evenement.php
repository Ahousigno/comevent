<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'theme',
        'tdr', 
        'programme', 
        'budget',
        'date_debut',
        'date_fin',
        'lieu',
        'categorie',
        'portee',
        'besoins', 
        'liste_invites',
        'user_id',
    ];

    public function event_creator(){
        return $this->belongsTo(User::class);
    }

    public function reunions(){
        return $this->hasMany(Reunion::class);
    }

    public function presses(){
        return $this->belongsToMany(Presse::class);
    }

    public function comite_organisations(){
        return $this->hasMany(Organisation::class);
    }

    public function rapports(){
        return $this->hasOne(Fin_Evenement::class);
    }

    public function photos(){
        return $this->hasMany(Album_Photo::class);
    }
}
