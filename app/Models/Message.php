<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /** @use HasFactory<\Database\Factories\MessageFactory> */
    use HasFactory;

    public $fillable = [
        'name',
        'email',
        'subject',
        'message',
        'status',
    ];

    public function status()
    {
        if ($this->status == true) {
            return '<span class="badge bg-label-success me-1">Readed</span>';
        }
        return '<span class="badge bg-label-danger me-1">Unreaded</span>';
    }
}
