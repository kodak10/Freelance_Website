<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $table = 'images_service_entreprises';
    protected $primaryKey = 'id';

    protected $fillable = [
        'file_name',
        'file_path',
        'service_id',
    ];

    public function service()
    {
        return $this->belongsTo(ServiceEntreprise::class);
    }
}
