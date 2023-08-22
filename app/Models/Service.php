<?php

namespace App\Models;

use Illuminate\Support\Str;
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

    public function departements()
    {
        return $this->hasOne(Departement::class);
    }


    // Définir une méthode d'accessor pour générer le slug à partir du titre
    public function getSlugAttribute()
    {
        return Str::slug($this->libelle);
    }
}
