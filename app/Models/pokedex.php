<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pokedex extends Model
{
    protected $fillable = [
        'name', 'type', 'species', 'height', 'weight',
        'hp', 'attack', 'defense', 'image_url',
    ];
}
