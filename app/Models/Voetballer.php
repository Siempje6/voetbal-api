<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voetballer extends Model
{
    use HasFactory;

    protected $fillable = ['naam', 'leeftijd', 'positie'];

    public function clubs()
    {
        return $this->belongsToMany(Club::class);
    }
}
