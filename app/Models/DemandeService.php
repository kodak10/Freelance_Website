<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemandeService extends Model
{
    use HasFactory;
    protected $fillable = [
        //'user_id',
        'client_id',
        'entreprise_id',
        'service_id',
        'description',
        'delais_execution',
        'document',

    ];
}
