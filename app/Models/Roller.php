<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roller extends Model
{
    protected $fillable = [
        'velicina', 'boja', 'materijal','stanje',
    ];

    //veza sa Rezervacija modelom
    use HasFactory;
    public function rezervacijas(){

        return $this->hasMany(Rezervacija::class);
    }
}
