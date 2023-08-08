<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secteur extends Model
{
    use HasFactory;
    protected $fillable = [
        'libelle',
        'idDepartement',
    ];

    public function categories()
    {
        return $this->hasOne(Departement::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
