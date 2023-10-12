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
        'image'
    ];

    public function entreprises()
    {
        return $this->belongsToMany(Entreprise::class, 'service_entreprises', 'service_id', 'entreprise_id');
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
