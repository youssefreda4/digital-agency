<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    /** @use HasFactory<\Database\Factories\SettingFactory> */
    use HasFactory;

    public $fillable = [
        'site_name',
        'address',
        'phone',
        'email',
        'facebook',
        'instagram',
        'x',
        'linkedin',
    ];
}
