<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Entreprise extends Model
{
    use HasFactory;
    protected $fillable = [
        'type_entreprise',
        'name',
        'nationalite',
        'telephone',
        'photo',
        'email',
        'regime',
        'localisation',
        'approve',
        'num_inscription',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function services()
    {
        return $this->belongsToMany(Service::class, 'service_entreprises', 'entreprise_id', 'service_id');
    }
    public function demandeServices()
    {
        return $this->hasMany(DemandeService::class, 'entreprise_id');
    }

}
