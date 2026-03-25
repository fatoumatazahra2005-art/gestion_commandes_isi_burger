<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailsCommande extends Model
{
    use HasFactory;
    //protected $table = 'details_commande';
    protected $fillable = [
        'commande_id',
        'burger_id',
        'quantity',
        'price'
    ];

    // Relation vers la commande
    public function commande()
    {
        return $this->belongsTo(Commande::class);
    }

    // Relation vers le burger
    public function burger()
    {
        return $this->belongsTo(Burger::class);
    }
}
