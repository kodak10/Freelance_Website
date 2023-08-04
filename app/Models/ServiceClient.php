<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceClient extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenoms',
        'telephone',
        'photo',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
