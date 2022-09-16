<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [
        'visuel', 
        'banderole', 
        'lien_media',
        'event_id'
    ];

    public function commentaires(){
        return $this->hasMany(Commentaire::class);
    }
}
