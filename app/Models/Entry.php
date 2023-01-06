<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the user that owns the password
     */
    public function userEntries()
    {
        return $this->belongsTo(User::class);
    }
}
