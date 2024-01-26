<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemandeService extends Model
{
    use HasFactory;
    protected $table = 'demande_services';

    protected $fillable = [
        //'user_id',
        'client_id',
        'entreprise_id',
        'service_id',
        'description',
        'delais_execution',
        'document',

    ];
    // public function compagny()
    // {
    //     return $this->belongsTo(Entreprise::class);
    // }

    // public function service()
    // {
    //     return $this->belongsTo(Service::class);
    // }

    public function compagny()
    {
        return $this->belongsTo(Entreprise::class, 'entreprise_id');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }


}
