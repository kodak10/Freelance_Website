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
    public function service()
    {
        return $this->hasMany(Service::class);
    }
}
