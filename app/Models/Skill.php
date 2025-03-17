<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    /** @use HasFactory<\Database\Factories\SkillFactory> */
    use HasFactory;

    public $fillable = [
        'name',
        'progress',
    ];

    public function progress()
    {
        if ($this->progress >= 1 && $this->progress <= 25) {
            return '<span class="badge bg-label-warning me-1">' .  $this->progress  . '</span>';
        } elseif ($this->progress > 25 && $this->progress <= 50) {
            return '<span class="badge bg-label-primary me-1">' .  $this->progress  . '</span>';
        } elseif ($this->progress > 50 && $this->progress <= 75) {
            return '<span class="badge bg-label-info me-1">' .  $this->progress  . '</span>';
        } else {
            return '<span class="badge bg-label-success me-1">' .  $this->progress  . '</span>';
        }
    }
}
