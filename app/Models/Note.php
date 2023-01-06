<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the user that owns the note
     */
    public function userNotes()
    {
        return $this->belongsTo(User::class);
    }
}