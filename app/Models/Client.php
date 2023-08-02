<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenoms',
        'approve',
        'telephone',
        'photo',
        'site_web',
        'type_entreprise',
        'description',
        'id_type_client',
        'date_naissance',
    ];
}
