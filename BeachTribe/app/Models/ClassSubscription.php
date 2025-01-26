<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassSubscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'classes_id',
        'users_id',
    ];

    // Relação com a tabela Classes
    public function class()
    {
        return $this->belongsTo(Class_::class, 'classes_id');
    }

    // Relação com a tabela Users
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
