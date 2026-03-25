<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    // Colonnes que l'on peut remplir via mass assignment
    protected $fillable = [
        'user_id',
        'total',
        'status'
    ];


    public function details()
    {
        return $this->hasMany(DetailsCommande::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function paiement()
    {
        return $this->hasOne(Paiement::class);
    }
}
