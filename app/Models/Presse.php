<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presse extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_presse',
        'nom_representant',
        'email_representant',
        'contact_representant',
    ];

    public function events(){
        return $this->belongsToMany(Evenement::class);
    }
}
