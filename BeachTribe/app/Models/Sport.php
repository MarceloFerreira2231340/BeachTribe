<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    use HasFactory;

    public function classes() {
        return $this->hasOne(Sport::class, 'sport_id', 'id');
    }
}
