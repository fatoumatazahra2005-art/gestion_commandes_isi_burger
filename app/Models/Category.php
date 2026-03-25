<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['libelle'];

    // If a category has many products
    public function burgers()
    {
        return $this->hasMany(Burger::class);
    }
}
