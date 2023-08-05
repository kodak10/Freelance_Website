<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'libelle',
        'idSecteur',
        'description',
    ];

    public function entreprise()
    {
        return $this->hasMany(Entreprise::class);
    }

    public function secteurs()
    {
        return $this->hasOne(Secteur::class);
    }
}
