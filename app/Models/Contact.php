<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use App\Mail\contactMail;

class Contact extends Model
{
    protected $fillable = ['name', 'email', 'message'];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($contact) {
            $adminEmail = "kodaklamagie@gmail.com";
            Mail::to($adminEmail)->send(new contactMail($contact));
        });
    }
}
