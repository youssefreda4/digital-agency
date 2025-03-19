<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    /** @use HasFactory<\Database\Factories\NewsletterFactory> */
    use HasFactory;

    public $fillable = [
        'email',
    ];
}
