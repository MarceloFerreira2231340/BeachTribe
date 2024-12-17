<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Class_ extends Model
{
    use HasFactory;
    protected $table = "classes";

    protected $fillable = [
        'type',
        'title',
        'state',
        'location',
        'date',
        'bgtime',
        'endtime',     
        'price',    
        'duration',
    ];

    public function typeToStr() 
    {
        switch($this->type)
        {
            case 'A': return 'Avançado';
            case 'M': return 'Médio';
            case 'B': return 'Iniciante';
        }
    }

    public function stateToStr() 
    {
        switch($this->state)
        {
            case 'A': return 'Ativo';
            case 'H': return 'Desativo';
        }
    }
}
