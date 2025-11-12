<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

    protected $fillable = ['naam', 'stad'];

    public function voetballers()
    {
        return $this->belongsToMany(Voetballer::class);
    }
}
