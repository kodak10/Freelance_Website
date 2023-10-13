<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceEntreprise extends Model
{
    use HasFactory;
    protected $fillable = [
        'service_id',
        'entreprise_id',
        'description',
        'delais_execution',
        'libelle',

    ];

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }

    public function entreprise()
    {
        return $this->belongsTo(Entreprise::class, 'entreprise_id', 'id');
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

}
